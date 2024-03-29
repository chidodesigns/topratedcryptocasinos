<?php
/*
Plugin Name: WPSiteSync for Auto Sync
Plugin URI: https://wpsitesync.com
Description: Works with <a href="/wp-admin/plugin-install.php?tab=search&s=wpsitesync">WPSiteSync for Content</a> to automatically synchronize Content to Target site whenever it's edited.
Author: WPSiteSync
Author URI: https://wpsitesync.com
Version: 1.1
Text Domain: wpsitesync-auto-sync
Domain path: /language

The PHP code portions are distributed under the GPL license. If not otherwise stated, all
images, manuals, cascading stylesheets and included JavaScript are NOT GPL.
*/

// this is only needed for systems that the .htaccess won't work on
defined('ABSPATH') or (header('Forbidden', TRUE, 403) || die('Restricted'));

if (!class_exists('WPSiteSync_Auto_Sync', FALSE)) {
	class WPSiteSync_Auto_Sync
	{
		private static $_instance = NULL;

		const PLUGIN_NAME = 'WPSiteSync for Auto Sync';
		const PLUGIN_VERSION = '1.1';
		const PLUGIN_KEY = 'cfd9d212ba96281cdd0d946c7194925a';

		const META_KEY = 'spectrom_sync_auto_sync_msg_';

		private $_pushed = FALSE;

		private function __construct()
		{
			add_action('spectrom_sync_init', array($this, 'init'));
			add_action('wp_loaded', array($this, 'wp_loaded'));
		}

		/**
		 * Creates a single instance of the plugin
		 */
		public static function get_instance()
		{
			if (NULL === self::$_instance)
				self::$_instance = new self();
			return self::$_instance;
		}

		/**
		 * Initializes the plugin, adding the required action hooks.
		 */
		public function init()
		{
//SyncDebug::log(__METHOD__.'()');
			add_filter('spectrom_sync_active_extensions', array($this, 'filter_active_extensions'), 10, 2);

			if (!WPSiteSyncContent::get_instance()->get_license()->check_license('sync_autosync', self::PLUGIN_KEY, self::PLUGIN_NAME)) {
SyncDebug::log(__METHOD__ . '() no license');
				return;
			}

			if (1 === SyncOptions::get_int('auth', 0)) {
//				add_action('transition_post_status', array($this, 'transition_post'), 10, 3);
				add_action('save_post', array($this, 'save_post'), 999, 1);
			}
			add_action('admin_notices', array($this, 'admin_notice'));
			add_action('spectrom_sync_metabox_after_button', array($this, 'output_metabox_message'), 100);
			add_action('spectrom_sync_push_content', array($this, 'push_notification'), 3);
		}

		/**
		 * Outputs a message in the WPSiteSync metabox informing user that Auto Sync is active
		 */
		public function output_metabox_message()
		{
			echo '<div style="margin-top:5px">* ', __('Auto Sync currently activated.', 'wpsitesync-auto-sync'), '</div>';
		}

		/**
		 * Called when WP is loaded so we can check if parent plugin is active.
		 */
		public function wp_loaded()
		{
			if (is_admin() && !class_exists('WPSiteSyncContent', FALSE) && current_user_can('activate_plugins')) {
				add_action('admin_notices', array($this, 'notice_requires_wpss'));
				add_action('admin_init', array($this, 'disable_plugin'));
			}
		}

		/**
		 * Displays the warning message stating the WPSiteSync is not present.
		 */
		public function notice_requires_wpss()
		{
			$install = admin_url('plugin-install.php?tab=search&s=wpsitesync');
			$activate = admin_url('plugins.php');
			echo '<div class="notice notice-warning">';
			echo	'<p>', sprintf(__('The <em>WPSiteSync for Auto Sync</em> plugin requires the main <em>WPSiteSync for Content</em> plugin to be installed and activated. Please %1$sclick here</a> or %2$sclick here</a> to activate.', 'wpsitesync-auto-sync'),
						'<a href="' . $install . '">',
						'<a href="' . $activate . '">'), '</p>';
			echo '</div>';
		}

		/**
		 * Disables the plugin if WPSiteSync not installed or ACF is too old
		 */
		public function disable_plugin()
		{
			deactivate_plugins(plugin_basename(__FILE__));
		}

		/**
		 * Called when a post's status is changed. We use this action in favor of 'publish_post' because it's used for all post types.
		 * @param string $new_status The new post_status value for the content.
		 * @param string $old_status The old post_status value for the content.
		 * @param WP_Post $post The post that is transitioning
		 */
		public function transition_post($new_status, $old_status, $post)
		{
SyncDebug::log(__METHOD__."('{$new_status}', '{$old_status}', {$post->ID})");
			if ('publish' === $new_status && $new_status !== $old_status) {
				$this->synchronize_content($post);
			} // 'publish' === $new_status
		}

		/**
		 * Callback for when post Content is saved.
		 * @param int $post_id The post ID being saved
		 */
		public function save_post($post_id)
		{
			// Note: save_post() gets called twice when SyncApiController::push() does a wp_update_post().
			// Once for the post revision that is created and once for the actual post being updated. The
			// check for wp_is_post_revision() catches this and does not sync the revision.

SyncDebug::log(__METHOD__.'():' . __LINE__ . ' saving post ' . $post_id);
			global $post;
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' post: ' . var_export($post, TRUE));

			// check for empty or newly created post
			if (NULL === $post) {
				$new_post = get_post($post_id, OBJECT);
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' new post: ' . var_export($new_post, TRUE));
				if (NULL === $new_post) {
					// this is a new post; don't need to sync until it's been saved
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' get_post(' . $post_id . ') returned NULL');
					return;
				}
				if ('auto-draft' === $new_post->post_status || 'draft' === $new_post->post_status) {
					// it's an auto-draft or new post; don't need to sync until it's been saved
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' post status is "auto-draft" or "draft"');
					return;
				}
			}

			// check for post revisions; don't need to send those
			if (wp_is_post_revision($post_id)) {
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' post revision');
				return;
			}

			// check the post type
			$allowed = apply_filters('spectrom_sync_allowed_post_types', array('post', 'page'));
			$the_post = get_post($post_id);
			if (!in_array($the_post->post_type, $allowed)) {
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' post type "' . $the_post->post_type . '" not an allowed type');
				return;
			}

SyncDebug::log(__METHOD__.'():' . __LINE__ . ' automatically syncing content for post id ' . $post_id);
			$the_post = get_post($post_id);
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' content=' . $the_post->post_content);
			if (NULL !== $the_post)
				$this->synchronize_content($the_post);
		}

		/**
		 * Callback for the 'spectrom_sync_push_content' action signaled by SyncApiController on completion of push operation
		 * @param int $post_id Post ID that was updated
		 * @param array $post_data The array of post data (not used)
		 * @param SyncApiResponse $response Instance of the response object (not used)
		 */
		public function push_notification($post_id, $post_data = array(), $response = NULL)
		{
			// TODO: check license
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' received push notification from SyncApiController; post id=' . $post_id);
			if (1 === SyncOptions::get_int('auth', 0)) {
				// only synchronize content if there's a valid Target
				$the_post = get_post($post_id);
				if (NULL !== $the_post)								// double check that the post was created
					$this->synchronize_content($the_post, TRUE);	// synchronize the content
			} else {
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' Target site not authenticated; not processing Push notification');
			}
		}

		/**
		 * Helper method used to push content to Target site
		 * @param object $post The post information
		 * @param boolean $override TRUE to override the SyncApiController check; otherwise FALSE
		 */
		private function synchronize_content($post, $override = FALSE)
		{
			if ($this->_pushed) {
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' content already pushed');
				return;
			}

			$controller = SyncApiController::get_instance();
			if (NULL !== $controller && !empty($controller->source_site_key)) {
				if (!$override) {
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' called from SyncApiController instance');
					// Controller has been instantiated.
					// This means that post is being updated via WPSS API call on the Target and we don't need to do anything
					return;
				}
else SyncDebug::log(__METHOD__.'():' . __LINE__ . ' overriding SyncApiController check');
			}

			$post_id = abs($post->ID);
			$post_type = $post->post_type;
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' post id: ' . $post_id . ' post type: ' . $post_type);
			if (0 !== $post_id && in_array($post_type, apply_filters('spectrom_sync_allowed_post_types', array('post', 'page')))) {
				// use API to push the post
				$api = new SyncApiRequest();
				$api_response = $api->api('push', array('post_id' => $post_id));

				// mark this as having been pushed so we don't re-enter
				$this->_pushed = TRUE;

SyncDebug::log(__METHOD__.'():' . __LINE__ . ' api response: ' . var_export($api_response, TRUE));
				$user_id = get_current_user_id();
				$key = self::META_KEY . $user_id;
				$code = $api_response->get_error_code();
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' error code: ' . $code);

				add_user_meta($user_id, $key, $code, TRUE);
			} // post_id && post_type
		}

		/**
		 * Callback for the 'admin_notices' action. Used to dispaly error messages on post editor page.
		 */
		public function admin_notice()
		{
			$user_id = get_current_user_id();
			$key = self::META_KEY . $user_id;
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' key=' . $key);
			$data = get_user_meta($user_id, $key, TRUE);
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' data: ' . var_export($data, TRUE));
			delete_user_meta($user_id, $key);
			if ('' !== $data) {
				$code = abs($data);
				if (0 === $code) {
					$class = 'notice-success';
					$msg = __('<em>WPSiteSync for Auto Sync</em> has automatically Pushed this Content to your Target site.', 'wpsitesync-auto-sync');
				} else {
					$class = 'notice-error';
					$err_msg = SyncApiRequest::error_code_to_string($code);
					$msg = sprintf(__('<em>WPSiteSync</em> encountered an error while Pushing this post to Target: %1$s', 'wpsitesync-auto-sync'),
						$err_msg);
				}
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' msg: ' . $msg);
				echo '<div class="notice ', $class, ' is-dismissible">';
				echo '<p>', $msg, '</p>';
				echo '</div>';
			}
		}

		/**
		 * Add the Auto Sync add-on to the list of known WPSiteSync extensions
		 * @param array $extensions The list to add to
		 * @param boolean $set
		 * @return array The list of extensions, with the WPSiteSync Auto Sync add-on included
		 */
		public function filter_active_extensions($extensions, $set = FALSE)
		{
//SyncDebug::log(__METHOD__.'()');
			if ($set || WPSiteSyncContent::get_instance()->get_license()->check_license('sync_autosync', self::PLUGIN_KEY, self::PLUGIN_NAME))
				$extensions['sync_autosync'] = array(
					'name' => self::PLUGIN_NAME,
					'version' => self::PLUGIN_VERSION,
					'file' => __FILE__,
				);
			return $extensions;
		}
	}
} // class exists

WPSiteSync_Auto_Sync::get_instance();

// EOF
