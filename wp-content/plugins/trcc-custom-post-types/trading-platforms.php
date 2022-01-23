<?php
  /**
     * Register a custom post type called "Trading Platform".
     *
     */

    add_action('init', 'trading_platforms_custom_post_type_case_study');
    
    function  trading_platforms_custom_post_type_case_study() {
        $labels = array(
            'name'                  => _x( 'Trading Platform', 'trading-platform', 'trading-platform' ),
            'singular_name'         => _x( 'Trading Platform', 'Post type singular name', 'trading-platform' ),
            'menu_name'             => _x( 'Trading Platforms', 'Admin Menu text', 'trading-platform' ),
            'name_admin_bar'        => _x( 'Trading Platform', 'Add New on Toolbar', 'trading-platform' ),
            'add_new'               => __( 'Add New Trading Platform', 'trading-platform' ),
            'add_new_item'          => __( 'Add New Trading Platform', 'trading-platform' ),
            'new_item'              => __( 'New Trading Platform', 'trading-platform' ),
            'edit_item'             => __( 'Edit Trading Platform', 'trading-platform' ),
            'view_item'             => __( 'View Trading Platform', 'trading-platform' ),
            'all_items'             => __( 'All Trading Platform', 'trading-platform' ),
            'search_items'          => __( 'Search Trading Platform', 'trading-platform' ),
            'parent_item_colon'     => __( 'Parent Trading Platform:', 'trading-platform' ),
            'not_found'             => __( 'No Trading Platform found.', 'trading-platform' ),
            'not_found_in_trash'    => __( 'No Trading Platform found in Trash.', 'trading-platform' ),
            'featured_image'        => _x( 'Trading Platform Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'trading-platform' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'trading-platform' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'trading-platform' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'trading-platform' ),
            'archives'              => _x( 'Trading Platform archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'trading-platform' ),
            'insert_into_item'      => _x( 'Insert into Trading Platform', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'trading-platform' ),
            'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'trading-platform' ),
            'filter_items_list'     => _x( 'Filter Trading Platform list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'trading-platform' ),
            'items_list_navigation' => _x( 'Trading Platform list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'trading-platform' ),
            'items_list'            => _x( 'Trading Platform list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'trading-platform' ),
        );
    
        $args = array(
            'labels'             => $labels,
            'has_archive'        => true,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'trading-platforms' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_icon'          => 'dashicons-chart-pie',
            'menu_position'      => null,
            'taxonomies'          => array(),
            'supports'           => array( 'title', 'thumbnail', 'editor', 'excerpt' ),
        );
    
        register_post_type( 'trading-platform', $args );
    }

