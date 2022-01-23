<?php

// Add Stylesheet
function trcc_load_stylesheets() {

  wp_enqueue_style('trcc_theme_stylesheet',get_template_directory_uri() .'/dist/css/bundle.css', NULL, microtime());

  wp_enqueue_script('trccjs', get_template_directory_uri() .'/dist/js/bundle.js', NULL, microtime());

}
  add_action('wp_enqueue_scripts', 'trcc_load_stylesheets');

    /**
   * Add Theme Support
   */
  add_action('after_setup_theme', 'trcc_theme_setup');
  function trcc_theme_setup()
  {
      add_theme_support('title-tag');
      add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
      add_theme_support('post-thumbnails');
      add_theme_support( 'automatic-feed-links');
      add_theme_support( 'custom-background');
      add_theme_support( 'custom-header');
      add_theme_support( 'custom-logo');
      add_theme_support('widgets');
      add_theme_support( 'custom-selective-refresh-widgets');
      add_theme_support( 'starter-content');
      add_theme_support('woocommerce');
      add_theme_support( 'responsive-embeds' );
  }

      /**
     * Register Nav Menu
     */

    function trcc_primary_menu()
{
    wp_nav_menu(
        array(
            'theme_location' => 'primary',
            'menu_class' => 'primary-menu',
            'container_class' => 'primary-menu-container'
    ));

}
    add_action( 'after_setup_theme', 'trcc_register_my_menu' );

    function trcc_register_my_menu() 
    {
    register_nav_menu( 'primary', __( 'Primary Menu', 'trcc' ) );
    }

         /**
     * Require Api Custom Field Page Models
     */

    require get_template_directory() .'/inc/template-tags-custom-fields-page-models.php';