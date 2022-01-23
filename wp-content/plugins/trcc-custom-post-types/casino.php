<?php
  /**
     * Register a custom post type called "Casino".
     *
     */

    add_action('init', 'casino_custom_post_type_case_study');
    
    function casino_custom_post_type_case_study() {
        $labels = array(
            'name'                  => _x( 'Casino', 'casino', 'casino' ),
            'singular_name'         => _x( 'Casino', 'Post type singular name', 'casino' ),
            'menu_name'             => _x( 'Casinos', 'Admin Menu text', 'casino' ),
            'name_admin_bar'        => _x( 'Casino', 'Add New on Toolbar', 'casino' ),
            'add_new'               => __( 'Add New Casino', 'casino' ),
            'add_new_item'          => __( 'Add New Casino', 'casino' ),
            'new_item'              => __( 'New Casino', 'casino' ),
            'edit_item'             => __( 'Edit Casino', 'casino' ),
            'view_item'             => __( 'View Casino', 'casino' ),
            'all_items'             => __( 'All Casino', 'casino' ),
            'search_items'          => __( 'Search Casino', 'casino' ),
            'parent_item_colon'     => __( 'Parent Casino:', 'casino' ),
            'not_found'             => __( 'No Casino found.', 'casino' ),
            'not_found_in_trash'    => __( 'No Casino found in Trash.', 'casino' ),
            'featured_image'        => _x( 'Casino Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'casino' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'casino' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'casino' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'casino' ),
            'archives'              => _x( 'Casino archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'casino' ),
            'insert_into_item'      => _x( 'Insert into Casino', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'casino' ),
            'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'casino' ),
            'filter_items_list'     => _x( 'Filter Casino list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'casino' ),
            'items_list_navigation' => _x( 'Casino list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'casino' ),
            'items_list'            => _x( 'Casino list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'casino' ),
        );
    
        $args = array(
            'labels'             => $labels,
            'has_archive'        => true,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'casinos' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_icon'          => 'dashicons-money-alt',
            'menu_position'      => null,
            'taxonomies'          => array(),
            'supports'           => array( 'title', 'thumbnail', 'editor', 'excerpt' ),
        );
    
        register_post_type( 'casino', $args );
    }

