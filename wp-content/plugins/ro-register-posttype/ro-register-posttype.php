<?php
/*
Plugin Name: Register Custom Post Types
Description: Plugin to register the press post type
Version: 1.0
Author: Raydel Ojeda
*/

/* Custom Post Type Start */
function create_posttype() {
    register_post_type( 'press',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Press' ),
                'singular_name' => __( 'Press' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'press'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
/* Custom Post Type End */

function cw_post_type_press() {
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'custom-fields', // custom fields
    );

    $labels = array(
        'name' => _x('Press', 'plural'),
        'singular_name' => _x('Press', 'singular'),
        'menu_name' => _x('Press', 'admin menu'),
        'name_admin_bar' => _x('Press', 'admin bar'),
        'add_new' => _x('Add New Press', 'add new'),
        'add_new_item' => __('Add New Press'),
        'new_item' => __('New press'),
        'edit_item' => __('Edit press'),
        'view_item' => __('View press'),
        'all_items' => __('All Press'),
        'search_items' => __('Search press'),
        'not_found' => __('No press found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'press'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('press', $args);
}
add_action('init', 'cw_post_type_press');
/*Custom Post type end*/



