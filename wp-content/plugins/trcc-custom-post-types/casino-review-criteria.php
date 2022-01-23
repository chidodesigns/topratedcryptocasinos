<?php
/**
   * Register a custom post type called "Casin Review Criteria".
   *
   */

  add_action('init', 'casino_review_criteria_post_type_case_study');
  
  function  casino_review_criteria_post_type_case_study() {
      $labels = array(
          'name'                  => _x( 'Casino Review Criteria', 'casino-review-criteria', 'casino-review-criteria' ),
          'singular_name'         => _x( 'Casino Review Criteria', 'Post type singular name', 'casino-review-criteria' ),
          'menu_name'             => _x( 'Casino Review Criterias', 'Admin Menu text', 'casino-review-criteria' ),
          'name_admin_bar'        => _x( 'Casino Review Criteria', 'Add New on Toolbar', 'casino-review-criteria' ),
          'add_new'               => __( 'Add New Casino Review Criteria', 'casino-review-criteria' ),
          'add_new_item'          => __( 'Add New Casino Review Criteria', 'casino-review-criteria' ),
          'new_item'              => __( 'New Casino Review Criteria', 'casino-review-criteria' ),
          'edit_item'             => __( 'Edit Casino Review Criteria', 'casino-review-criteria' ),
          'view_item'             => __( 'View Casino Review Criteria', 'casino-review-criteria' ),
          'all_items'             => __( 'All Casino Review Criteria', 'casino-review-criteria' ),
          'search_items'          => __( 'Search Casino Review Criteria', 'casino-review-criteria' ),
          'parent_item_colon'     => __( 'Parent Casino Review Criteria:', 'casino-review-criteria' ),
          'not_found'             => __( 'No Casino Review Criteria found.', 'casino-review-criteria' ),
          'not_found_in_trash'    => __( 'No Casino Review Criteria found in Trash.', 'casino-review-criteria' ),
          'featured_image'        => _x( 'Casino Review Criteria Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'casino-review-criteria' ),
          'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'casino-review-criteria' ),
          'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'casino-review-criteria' ),
          'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'casino-review-criteria' ),
          'archives'              => _x( 'Casino Review Criteria archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'casino-review-criteria' ),
          'insert_into_item'      => _x( 'Insert into Casino Review Criteria', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'casino-review-criteria' ),
          'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'casino-review-criteria' ),
          'filter_items_list'     => _x( 'Filter Casino Review Criteria list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'casino-review-criteria' ),
          'items_list_navigation' => _x( 'Casino Review Criteria list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'casino-review-criteria' ),
          'items_list'            => _x( 'Casino Review Criteria list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'casino-review-criteria' ),
      );
  
      $args = array(
          'labels'             => $labels,
          'has_archive'        => true,
          'public'             => true,
          'publicly_queryable' => true,
          'show_ui'            => true,
          'show_in_menu'       => true,
          'query_var'          => true,
          'rewrite'            => array( 'slug' => 'casino-review-criteria' ),
          'capability_type'    => 'post',
          'has_archive'        => true,
          'hierarchical'       => false,
          'menu_icon'          => 'dashicons-yes-alt',
          'menu_position'      => null,
          'taxonomies'          => array(),
          'supports'           => array( 'title', 'thumbnail', 'editor', 'excerpt' ),
      );
  
      register_post_type( 'review-criteria', $args );
  }

