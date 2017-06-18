<?php

function create_portfolio_item_post() {
    $labels = array(
        'name'                  => __('Portfolio Items'),
        'singular_name'         => __('Portfolio Item'),
        'add_new'               => __('Add New Portfolio Item'),
        'edit_item'             => __('Edit Portfolio Item'),
        'new_item'              => __('New Portfolio Item'),
        'view_item'             => __('View Portfolio Item'),
        'search_items'          => __('Search Portfolio Items'),
        'not_found'             => __('Nothing Found'),
        'featured_image'        => __('Screenshot'),
        'set_featured_image'    => __('Set Screenshot'),
        'remove_featured_image' => __('Remove Screenshot'),
        'use_featured_image'    => __('Use Screenshot'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'exclude_from_search'   => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'query_var'             => true,
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_icon'             => 'dashicons-portfolio',
        'rewrite'               => array( 'slug' => 'portfolio', 'with_front' => false ),
        'has_archive'           => true,
        'supports'              => array( 'title', 'thumbnail' ),
    );

    register_post_type( 'portfolio-item', $args );
}

add_action( 'init', 'create_portfolio_item_post' );

?>