<?php 

// child theme functions!

add_theme_support('post-thumbnails'); 

add_action( 'init', 'register_cpt_testimonial' );

function register_cpt_testimonial() {

    $labels = array( 
        'name' => _x( 'Testimonials', 'testimonial' ),
        'singular_name' => _x( 'Testimonial', 'testimonial' ),
        'add_new' => _x( 'Add New', 'testimonial' ),
        'add_new_item' => _x( 'Add New Testimonial', 'testimonial' ),
        'edit_item' => _x( 'Edit Testimonial', 'testimonial' ),
        'new_item' => _x( 'New Testimonial', 'testimonial' ),
        'view_item' => _x( 'View Testimonial', 'testimonial' ),
        'search_items' => _x( 'Search Testimonials', 'testimonial' ),
        'not_found' => _x( 'No testimonials found', 'testimonial' ),
        'not_found_in_trash' => _x( 'No testimonials found in Trash', 'testimonial' ),
        'parent_item_colon' => _x( 'Parent Testimonial:', 'testimonial' ),
        'menu_name' => _x( 'Testimonials', 'testimonial' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'This is a description of the "testimonials" custom post type',
        'supports' => array( 'title', 'editor', 'excerpt' ),
        'taxonomies' => array( 'category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'testimonial', $args );
}

add_action( 'init', 'register_taxonomy_locations' );

function register_taxonomy_locations() {

    $labels = array( 
        'name' => _x( 'locations', 'locations' ),
        'singular_name' => _x( 'Location', 'locations' ),
        'search_items' => _x( 'Search locations', 'locations' ),
        'popular_items' => _x( 'Popular locations', 'locations' ),
        'all_items' => _x( 'All locations', 'locations' ),
        'parent_item' => _x( 'Parent Location', 'locations' ),
        'parent_item_colon' => _x( 'Parent Location:', 'locations' ),
        'edit_item' => _x( 'Edit Location', 'locations' ),
        'update_item' => _x( 'Update Location', 'locations' ),
        'add_new_item' => _x( 'Add New Location', 'locations' ),
        'new_item_name' => _x( 'New Location', 'locations' ),
        'separate_items_with_commas' => _x( 'Separate locations with commas', 'locations' ),
        'add_or_remove_items' => _x( 'Add or remove locations', 'locations' ),
        'choose_from_most_used' => _x( 'Choose from the most used locations', 'locations' ),
        'menu_name' => _x( 'locations', 'locations' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'locations', array('testimonial'), $args );
    register_taxonomy( 'locations', array('post'), $args );

}

add_image_size( 'front-page-thumb', 225, 225, true )



 ?>