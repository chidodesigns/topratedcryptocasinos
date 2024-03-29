=== WPSiteSync for Content ===
Contributors: serverpress, spectromtech, davejesch, Steveorevo
Donate link: http://wpsitesync.com
Tags: content, content sync, data migration, desktopserver, export, import, migrate content, moving data, staging, synchronization, taxonomies
Requires at least: 3.5
Requires PHP: 5.3.1
Tested up to: 5.8
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Provides the capability to synchronize individual pieces of Content between two WordPress sites.

== Description ==

WPSiteSync for Content helps Designers, Developers and Content Creators Synchronize
SPECIFIC Content (i.e. Posts and Pages) between WordPress sites, AFTER a site has gone live.
You can do this in Real-Time, with a simple CLICK of a button!

A typical development workflow looks like this:

1. Create Locally (Development Site)
2. Build / Break / Fix Site
3. Test Site Locally
4. Deploy Site to LIVE host

The challenge presented once you've deployed is that any future content changes must
either be done on the live site, or a full deployment is necessary if the changes were
made locally or on a staging site.

WPSiteSync is unique in that it solves this problem by offering the ability to only
deploy the CONTENT that has changed. This means ZERO down-time and ZERO data loss.
It is the missing piece of the development puzzle, allowing for a proper workflow
beyond the deployment and into its ongoing operation.

With WPSiteSync, the new workflow looks like this:

1. Create Locally (Development Site)
2. Build / Break / Fix Site
3. Test Site Locally
4. Deploy Site to LIVE host
5. Create or Change Content on Your Local or Staging Site
6. Push New Additions/Changes from Local or Staging to Live Site

Example use cases:

* You've created content (blog Post or Page) and need to move it to/from your Live site
* You administer the site but have contributors
* You run an eCommerce site and wish to update Pages without overwriting Purchase and Customer information
* You want to add or edit Products in your store and move these to the Live store (Premium Extensions Required) 
* You're using Gutenberg and want to easily move complex Page content from Staging to Live site
* You only need to synchronize specific content (not the complete database)

You can use <em>WPSiteSync for Content</em> to synchronize your Posts and Pages between any two
WordPress sites, in any configuration. Some examples include:

* Local -&gt; Staging
* Staging -&gt; Live
* Local -&gt; Staging -&gt; Live
* Local -&gt; Integration -&gt; Staging -&gt; Live

[youtube https://www.youtube.com/watch?v=KpeiTMbdj_Y]

><strong>Support Details:</strong> We are happy to provide support and help troubleshoot
issues. Visit our Support page at <a href="https://serverpress.com/contact/" target="_blank">https://serverpress.com/contact/</a>.
Users should know however, that we check the WordPress.org support forums once
a week on Wednesdays from 6pm to 8pm PST (UTC -8).

The <em>WPSiteSync for Content</em> plugin was specifically designed to simplify
your workflow when creating content between development, staging and live servers.
This tool removes the need to migrate an entire database, potentially overwriting
new content on your live site such as comments, reviews, purchases, etc. Now you
can update individual Pages or Posts as desired, leaving everything else intact.
The best part is that it's a simple click of a button, reducing errors and saving
you time.

WPSiteSync for Content is fully functional in any WordPress environment. We recommend
using DesktopServer for your Local Development Environment, but it is not a requirement.

<strong>This benefits your Development Workflow in more ways than one:</strong>

* Saving development time with No files to backup, download and upload.
* After Client Approval on Staging site, it is now Faster and Easier than ever to move to your live site.
* No other content is affected, eliminating data loss such as Comments.
* Limit mistakes copying and pasting. WPSiteSync moves all data associated with your Content, including taxonomies, meta-data and images.

<strong>In the Free Version, WPSiteSync for Contents synchronizes the following:</strong>

* Blog Post Text Content
* Page Text Content
* Content Images
* Featured Images
* Shortcodes referencing Galleries and Playlists
* PDF Attachments
* Meta-Data
* Taxonomies such as Tags and Categories
* Gutenberg Compatible. Create content with Gutenberg on Staging and Push it to Live, along with all images.
* And lots more

<strong>In our Premium Membership Bundle, you will also Receive:</strong>

* WPSiteSync for Custom Post Types (includes Custom Taxonomies)
* WPSiteSync for Bi-Directional Pull (Syncing from Live to Local/Staging)
* WPSiteSync for Author Attribution
* WPSiteSync for Automatic Synchronization
* WPSiteSync for Bulk Actions
* WPSiteSync for Genesis Settings
* WPSiteSync for Menus
* WPSiteSync for Beaver Builder Content Synchronization
* WPSiteSync for Easy Digital Downloads Content
* WPSiteSync for Gutenberg Blocks (support for popular Third Party Blocks)
* WPSiteSync for WooCommerce Products
* FULL access to ALL future Premium Extensions

<strong>For more perks such as Early Access</strong> and <strong>Exclusive Preview</strong>
of upcoming Features, please visit us at <a href="https://wpsitesync.com">WPSiteSync.com</a>
and join our newsletter.

<strong>ServerPress, LLC is not responsible for any loss of data that may occur as a result
of WPSiteSync for Content's use.</strong> Always backup your data before initial use of this
product. Should you experience such an issue, we want to know about it right away. Please
<a href="https://serverpress.com/contact/" target="_blank">contact our Support Team</a>
and we'll do everything we can to get you up and running.

== Installation ==

Installation instructions: To install, do the following:

1. From the dashboard of your site, navigate to Plugins --&gt; Add New.
2. Select the "Upload Plugin" button.
3. Click on the "Choose File" button to upload your file.
3. When the Open dialog appears select the wpsitesynccontent.zip file from your desktop.
4. Follow the on-screen instructions and wait until the upload is complete.
5. When finished, activate the plugin via the prompt. A confirmation message will be displayed.

or, you can upload the files directly to your server.

1. Upload all of the files in `wpsitesynccontent.zip` to your  `/wp-content/plugins/wpsitesynccontent` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

You will need to Install and Activate the WPSiteSync for Content plugin on your
development website (the Source) as well as the Target web site (where the Content
is being moved to).

Once activated, you can use the Configuration page found at Settings -&gt; WPSiteSync,
on the Source website to set the URL of the Target site and enter the login credentials
to use when sending data. This will allow the WPSiteSync for Content plugin to
communicate with the Target website, authenticate, and then move the data between
the websites. You do not need to Configure WPSiteSync for Content on the Target
website as this will only be receiving Synchronization requests from the Source
site.

== Frequently Asked Questions ==

= Do I need to Install WPSiteSync for Content on both sites? =

Yes! The WPSiteSync for Content needs to be installed on the local or Staging server
(the website you're moving the data from - the Source), as well as the Live server
(the website you're moving the data to - the Target).

= Does this plugin Synchronize all of my content (Pages and Posts) at once? =

No. WPSiteSync for Content will only synchronize the one Page or Post content that
you are editing. And it will only Synchronize the content when you tell it to. This
allows you to control exactly what content is moved between sites and when it will
be moved.

= Will this overwrite data while I am editing? =

No. WPSiteSync checks to see if the Content is being edited by someone else on
the Target web site. If it is, it will not update the Content, allowing you to
coordinate with the users on the Target web site.

In addition, each time Content is updated or Synchronized on the Target web site,
a Post Revision is created (using the Post Revision settings). This allows you to
recover Content to a previous version if needed.

= Does WPSiteSync only update Page and Posts Content? =

Yes. However, support for synchronizing Custom Post Types is available with our
<a href="https://wpsitesync.com/downloads/wpsitesync-for-custom-post-types/" target="_blank">WPSiteSync
for Custom Post Types</a> add-on. Additional plugins for User Attribution, Synchronizing
Menus and Pulling content are available as well.

More complex data, such as WooCommerce products, Forms (like Gravity Forms or Ninja
Forms), and other plugins that use custom database tables are supported by
additional plugins that work with those products.

= Is WPSiteSync Gutenberg Compatible? =

Yes! The free version of <em>WPSiteSync for Content</em> supports all Gutenberg
blocks that are part of WordPress. There are many plugins that add more block types
than those available in WordPress, however. Our add-on product, <a href="https://wpsitesync.com/downloads/wpsitesync-for-gutenberg-blocks/"
target="_blank">WPSiteSync for Gutenberg Blocks</a> adds support for several of
the more popular third party Gutenberg add-ons.

If your favorite Gutenberg Block plugin is not currently supported, let us know
and we can add support for it.

== Screenshots ==

1. Configuration page.
2. WPSiteSync for Content metabox.

== Changelog ==
= 1.7.1 - Aug 27, 2021 =
* fix: address compatibility issue with latest release of Classic Editor.

= 1.7 - Mar 9, 2021 =
* fix: Ensure JSON encoded metadata maintains escaped characters within strings. (Thanks Kris B.)
* fix: Mimic WordPress's "feature" of slash encoding special characters in password strings. (Thanks Brian S.)
* fix: Add braces to denote code block. (Thanks Miguel D.)
* fix: Improve handling of multiple postmeta entries with the same meta_key. (Thanks Miguel D.)
* enhancement: Allow WPSiteSync API operations to work when Members' "Enable Private Site" setting is turned on. (Thanks Christopher B.)
* enhancement: Allow connections to DesktopServer's Ngrok site. (Thanks Wrenford H.)
* enhancement: Add mechanism to inform Target site of any add-ons required to process data from Source.
* enhancement: Add before/after API request processing hooks.
* enhancement: Change declaration of parse_shortcodes() so it can be used by Elementor add-on.
* enhancement: Check for Gutenberg block property's existence before accessing to prevent invalid references.
* enhancement: Update compatibility with Coming Soon v6+ (Thanks Ned G.)
* enhancement: Improve error detection in processing AJAX requests (Thanks Ned G.)
* enhancement: Improve Block property detection and error recovery.

= 1.6.1 - Jun 16, 2020 =
* fix: Find child attachments to a post in cases where the post_content is empty. (Thanks Paul W.)
* fix: Change incorrect class reference in authentication error condition. (Thanks Dave)

= 1.6 - Jun 9, 2020 =
* fix: Update image title, name, caption and alt text when updating images that have already been Pushed. (Thanks Dexter N.)
* fix: Improve handling of escaped Unicode data in postmeta content. (Thanks Kris B.)
* fix: Address occasional runtime error that occurs during array size calculations in Gutenberg entries.
* fix: Address edge case in serialized data fixup causing infinite loop. (Thanks John M.)
* fix: Remove references to deprecated constants FILTER_FLAG_SCHEME_REQUIRED and FILTER_FLAG_HOST_REQUIRED used in Settings validation.
* enhancement: Add check for Cloudflare blocking WPSiteSync API request and provide more helpful error message. (Thanks Shreya R.)
* enhancement: Add detection of Cloudfront WAF blocking WPSiteSync API requests.
* enhancement: Add more flexible checking for API response content-type. (Thanks Daniel L.)
* enhancement: Refactor API bootstrap process to allow add-ons to check for permissions earlier (Thanks Sally G.)
* enhancement: Improve error recovery in authentication checks.
* enhancement: Refactor API Controller to improve functionality during Pull requests.

= 1.5.4 - Feb 20, 2020 =
* fix: Address MultiSite activation issue by switching back to original blog instead of using restore_current_blog(). (Thanks Fabrizim)
* fix: Recalculate content length/block offset when Block Content is changed via add-on/filter (Thanks Patrick W.)
* fix: Correctly update parent_post values for child attachments on Target site.
* fix: Handle incorrect "unescaping" of quotes contained within JSON strings in meta data. (Thanks Mark A.)
* fix: Address Unicode encoded characters getting double encoded on Target site after Push operation. (Thanks Miguel D.)
* enhancement: Detect non-JSON API responses and display more informational error message. (Thanks Eric M.)
* enhancement: When authentication fails with error 0, add message about disabling Two-Factor Authentication. (Thanks Jason T.)
* enhancement: Implement shortcode parsing and updating of post ID references within shortcodes for all standard WP shortcodes.
* enhancement: Add checking of API response Content Type and provide error if not application/json.
* enhancement: Add optional data to notification messages
* enhancement: Allow for filtering of API data within Javascript before AJAX calls.
* enhancement: Add signaling of Javascript callbacks with API result value after "Push to Target" is clicked.
* enhancement: Improve parser for Gutenberg data allowing for better handling of simple array references.
* enhancement: Detect changes to tinyMCE editor content (in addition to textareas) and display "Save changes" message.
* enhancement: Allow handling of relative URL references to images in the Media Library. (Thanks Ryan J.)
* enhancement: Allow HTTP connections to a local Target site when used with Airplane Mode plugin.
* enhancement: Add new Category ID synchronization for the Latest Posts Gutenberg Block.
* enhancement: Added ability to use define() statements to configure Target, Username and Password to use for Syncing. (Thanks David S.)
* enhancement: Add define() for WPSiteSync debug mode and log file location.
* enhancement: Rewrote parsers and accessor methods that handle manipulation of Gutenberg JSON content.

= 1.5.3 - Sep 17, 2019 =
* fix: Address compatibility issue with WPML's metabox on post edit page. (Thanks Autumn C.)
* fix: Add detection of Apache version as well as 2.2 and 2.4 compatible .htaccess rules.
* fix: Check for empty list of saved blocks in Push operations to avoid warning messages.
* fix: Fix handing of 'getinfo' API response data if warnings are present with JSON response.
* fix: Address problem with Network Administrators not always being able to edit settings on a MultiSite. (Thanks Mark R.)
* fix: Custom Roles with 'edit_pages' Capability can now be configured and allowed to use WPSiteSync operations. (Thanks Mark R.)
* enhancement: Add detection of mod_security blocking API requests; provide better description of problem in this case. (Thanks Veldin H.)
* enhancement: Add helper methods, SyncApiResponse->get_error_message() and get_notice_message().
* enhancement: Improve descriptions on Settings Help page.
* enhancement: Add more marketing messages for Dashboard Widget and Settings page.
* enhancement: Add new attachment search helper method needed for Beaver Builder audio module.
* enhancement: Add scrubbing before logging in case any sensitive information is contained arrays.
* enhancement: Rework licensing page to reduce required page submissions.
* enhancement: Improve messaging when a Parent Page needs to be Pushed.
* enhancement: Store taxonomy id conversion values to allow updating of taxonomy IDs in Gutenberg Blocks.
* enhancement: Refactor code in Gutenberg Blocks add-on so it can be shared by other add-ons that update Blocks.

= 1.5.2 - May 23, 2019 =
* fix: correctly re-display the WPSiteSync metabox when hiding then showing the Gutenberg Components menu. (Thanks John H.)
* fix: display the WPSiteSync metabox after click on "Publish" button in Gutenberg editor.
* fix: no longer displaying "Invalid URL" message when saving settings that do not include Target site URL. (Thanks John H.)
* fix: improve image file location code when WP is installed in a subdirectory (Thanks Alpesh J.)
* fix: resolved issue with Yoast SEO Premium not saving meta description (Thanks Sukham S.)
* fix: resolved issue with occasionally losing configuration settings in MultiSite environments (Thanks Tae K.)
* fix: add check for count of images sent when processing Gutenberg block references
* enhancement: add callback used in Javascript API that can be used to work with multi-sync option in Bulk Actions add-on. (Thanks Alex V.)
* enhancement: added method to Sync Model to look up a Source site's entry given Target post ID
* enhancement: add more capability checks to all admin operations

= 1.5.1 - Feb 25, 2019 =
* fix: resolved issue when Pushing posts where Featured Images were not set
* fix: improved database alter process when plugin is updated

= 1.5 - Feb 11, 2019 =
* fix: improve detection of Target post being edited
* fix: improve detection of images referenced in Content to ensure that they get Pushed to the Target site
* enhancement: add dashboard widget
* enhancement: implement optional usage reporting to ServerPress.com
* enhancement: add new Target side post lookup options: slug then title and title then slug
* enhancement: add logging of Push receipt
* enhancement: improve error messaging if API calls are blocked by Wordfence
* enhancement: improve SyncApiRequest::url_to_path() to better handle subdirectory installs
* enhancement: improve handling of Gutenberg Block data and add hooks to allow add-ons to extend handling capabilities
* enhancement: allow all mime types known by WP to be Pushed as attachments

= 1.4.2 - Oct 16, 2018 =
* enhancement: update serialization fixup code to allow for serialized data within serialized data (Thanks Alpesh J.)
* enhancement: improve handling of empty Content, resolve warning messages (Thanks Erin M.)
* fix: domain comparison for embedded images wasn't finding local images if site_url was mixed case
* fix: removed logging of Target site credentials (Thanks Randy K.)
* fix: address runtime error in serialization parsing (Thanks Vid W.)
* fix/enhancement: improve MultiSite activation and fix activation for new sites added to network (Thanks Tyler S.)
* fix: potential runtime error in licensing code
* fix: runtime errors can sometimes be displayed if previously pushed content no longer exists on Target

= 1.4.1 - Aug 2, 2018 =
* enhancement: updated configuration of allowed Roles for WPSiteSync UI. Can now allow custom Roles. (Thanks Randy K.)
* enhancement: disable redirect by f(x) Private Site plugin on WPSiteSync API endpoint.
* enhancement: detect and recover from missing file attachments (Thanks Matt B.)
* enhancement: adjust file path when working with attachments on MultiSite installs.

= 1.4 - Jul 10, 2018 =
* fix: fix conversion of url to file path when Pushing media content (Thanks Jocelyn M.)
* fix: fix conversion of mis-matched schemes in Source Content (Thanks Jocelyn M.)
* fix: fixup url encoded Source domain references to Target domain (Thanks Jocelyn M.)
* fix: maintain upload location of Source files on Target site (Thanks Bradley S.)
* fix: improve error checking on API calls to Target site (Thanks Erin M.)
* enhancement: add features to help implement multiple Targets sites feature
* enhancement: add notices at start/end of Push queue processing
* enhancement: improve handling of serialized meta data containing URL references (Thanks Rob H./Jadran B.)
* enhancement: handle pushing of images referenced on CDNs (Thanks Rob H./Jadran B.)
* enhancement: add failover for obtaining contents of images
* enhancement: implement Gutenberg UI elements
* enhancement: better handling of inputs on Settings page
* enhancement: add information on featured image to Content Details
* enhancement: improve messaging/descriptions on Settings page
* enhancement: improve handling of image references and mapping to attachment id (Thanks Erin M.)
* enhancement: added available extensions to Settings page
* enhancement: added minimum user role to have access to WPSiteSync metabox UI (Thanks Dave H.)

= 1.3.3 - Jan 16, 2018 =
* fix: allow for custom post status values (Thanks Alex V.)
* fix: removed deprecated warnings for function calls (Thanks Peter M.)
* fix: resolve undefined index warnings on empty configs (Thanks Peter M.)
* fix: fix to usage of fallback encryption method (Thanks Mika A.)
* fix: fix spelling error and array index error
* fix: runtime error that can occasionally occur while processing taxonomies
* fix: runtime error that can occur on first edit of settings
* fix: minor security update- remove bad password message that could imply valid account name
* fix: remove deprecation messages for mcrypt functions
* enhancement: add checks for SSL specific error conditions
* enhancement: add "more info" links to all error messages shown in UI
* enhancement: updates to licensing code
* enhancement: check serverpress.com domain for licensing data
* enhancement: add get_param method to javascript code
* enhancement: make SyncApiResponse instance available from Controller; needed by Divi add-on
* enhancement: check data object used in API calls and return early if contains error

= 1.3.2 - Oct 12, 2017 =
* fix: improve checking for sync-specific meta data to be ignored
* fix: only set user id if available in SyncApiController->push()
* fix: improved code that recovers from errors displayed within JSON response data
* fix: set $media_id property during 'upload_media' API calls to media type after create/update of image
* fix: adjust parameter for wp_get_attachment_image_src()
* fix: check parameter passed to debug_backtrace() in case of old (< 5.3.6) versions of PHP
* fix: handle empty post content and featured images correctly (Thanks to Lucas C.)
* fix: correct taxonomy term lookup on Target to preserve naming (Thanks to Calvin C.)
* fix: when changing Target or Username configs, require passwords (Thanks to Erin M.)
* fix: javascript compatibility issue with Visual Composer backend editor (Thanks to Carlos)
* fix: set taxonomy type for each taxonomy entries when processing hierarchical taxonomies
* fix: recover and continue from failures of media attachments rather than aborting
* fix: add Source to Target URL fixups in meta data and excerpt (Thanks to Bryan A.)
* enhancement: add hook to notify add-ons that images have completed processing
* enhancement: allow add-ons to modify HTTP post content during 'upload_media' API calls
* enhancement: allow authentication to check for email address, in addition to user name
* enhancement: add detection and circumvention of 'Coming Soon' / 'Maintenance Mode' plugins during API calls
* enhancement: allow add-ons to modify allowed mime types during 'upload_media' API calls
* enhancement: allow add-ons to modify `content_type` column in sync table
* enhancement: make display of error messages via UI easier
* enhancement: add callback to remove data from WPSS tables when content is deleted
* enhancement: add appropriate headers for AJAX responses
* enhancement: add 'match-mode' option to allow users to perform new content lookups on target by post title or slug; deprecate SyncApiController::get_post_by_title()
* enhancement: add fallback encryption when mcrypt is not available

= 1.3.1 - Jan 11, 2017 =
* Fix: add placeholder file to force creation of languages/ directory.
* Enhancement: Additional changes in preparation for WPSiteSync for BeaverBuilder.
* Enhancement: Better error messages when empty or missing post content is encountered.
* Enhancement: Improved Media Library image lookup for use by BeaverBuilder add-on.
* Enhancement: Added pre processing hook for use by ACF add-on.

= 1.3 - Dec 22, 2016 =
* fix: fix author assigned on revisions when Pushing Content to Target
* fix: add/update text domain used on some translation strings (Thanks Pedro M.)
* fix: change to handling of featured image data (Thanks Josh C.)
* fix: handle attachments for WP installs in subdirectories (Thanks Rudi L.)
* fix: change to permissions checking that sometimes resulted in the inability to push Content (Thanks Rudi L.)
* fix: update 'unique_filename_callback' filter to work with WP 4.7
* enhancement: add features for WPSiteSync for Beaver Builder
* enhancement: display better error messages if authentication process fails on Target (thanks Chris F.)
* enhancement: check user capabilities when authenticating on Target
* enhancement: return error if auth token cannot be saved on Target site 
* enhancement: optimizations to licensing system (Thanks Dominick K.)
* enhancement: better handling of serialized postmeta data

= 1.2.2 - Oct 7, 2016 =
* Fix: Add missing file.

= 1.2.1 - Oct 7, 2016 =
* Fix: Update collation on created table for some hosts.
* Enhancement: Add checks for updates to add-ons via WPSiteSync.com site.
* Fix: Sanitize password hash for encryption algorithms. (thanks Jonah W.)
* Enhancement: Specify timeout for API calls.
* Enhancement: Remove any error output interfering with JSON data in API calls.
* Enhancement: Improve error handling/recovery on API calls.
* Fix: Update checks for allowed post types. (thanks Cathy E.)
* Enhancement: Improve UX for License Keys.

= 1.2 - Sep 7, 2016 =
* Fix: Changes to resolve authentication issues. (thanks to Craig S., Cathy E., Josh C. and Jason H.)
* Enhancement: Some optimizations and code cleanup.
* Enhancement: Updates in the Settings page for validating URLs. (thanks to Craig S.)
* Fix: Fixing a table name reference when removing tables on uninstall.
* Enhancement: Code to protect JSON data being returned via API calls when third-party plugins throw runtime errors.
* Fix: Fix URL references in the Help text. (thanks to Pedro M.)
* Fix: Fix text domain reference. (thanks to Pedro M.)
* Fix: authentication token save. (thanks to Jeff C.)
* Enhancement: Changes to allow new features in upcoming add-ons.
* Enhancement: Change API code to work with any Permalink setting on Target site.

= 1.1.1 - Jul 20, 2016 =
* Fix for authentication issues that sometimes occur after initial credentials are entered.

= 1.1 - Jul 8, 2016 =
* Add features to Settings page and extensibility of APIs in preparation for add-on functionality.
* Fixed several bugs in Settings, data migration after update, admin UI and runtime errors.
* Add response object to API filters; allows display of API warnings in UI.

= 1.0 - Jun 29, 2016 =
* Official Release.
* UI improvements.
* Image attachments sync title, caption and alt content.
* Allow PDF attachments.
* Updates to support Pull operations.
* Change name of API endpoint to ensure uniqueness.
* Add Target Site Key to settings and change database structure.
* Turn on checks for Strict Mode.
* Small bug fixes.

= 0.9.7 - Jun 17, 2016 =
* Release Candidate 2
* Fix some authentication issues on some hosts.
* Improve mechanism for detecting and syncing embedded image references within content.
* Fix duplicated messages in Settings.
* Check mime types of images to ensure valid images are being sent.
* Optionally remove settings/tables on plugin deactivation.
* Other minor bug fixes, improvements and cleanup.

= 0.9.6 - May 20, 2016 =
* Release Candidate 1
* Add authentication token rather than storing passwords.
* Fix issue with not removing Favorite Image on Target when image removed on Source.

= 0.9.5 - May 2, 2016 =
* Fix CSS conflict with wp-product-feed-manager plugin; load CSS/JS only on needed pages and make CSS rules more specific.

= 0.9.4 - Apr 29, 2016 =
* Fix media upload for images referenced within the Content and for featured images.

= 0.9.3 - Apr 26, 2016 =
* Fix taxonomy sync issue when taxonomy does not exist in some conditions on Target.

= 0.9.2 - Apr 22, 2016 =
* Fix runtime error when embeded images are in content.

= 0.9.1 - Apr 20, 2016 =
* Work around for missing apache_request_headers() on SiteGround; fix misnamed header constant.

= 0.9 - Apr 18, 2016 =
* First release - BETA

== Upgrade Notice ==

= 0.9 =
First release.
