<?php

/* 
======================================
INCLUDE SCRIPTS
======================================
*/
function rockyroutes_script_enqueue() {
    wp_enqueue_style( 'customtstyle', get_template_directory_uri() . '/css/rockyroutes.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'jquery');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', 'true' );
    
}

add_action( 'wp_enqueue_scripts',  'rockyroutes_script_enqueue');

/* 
======================================
THEME SUPPORTS
======================================
*/

function rockyroutes_theme_setup() {
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'menu');

    register_nav_menu( 'primary', 'Primary Header Navigation' );
}

add_action('init', 'rockyroutes_theme_setup');

/* 
======================================
CUSTOM LOGO
======================================
*/
function rockyroutes_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-width'  => true,
        'header-text' => array(  ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'rockyroutes_custom_logo_setup' );

/* 
======================================
CUSTOM HEADER
======================================
*/
function rockyroutes_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . '/img/header.jpg',
        'default-text-color' => '000',
        'width'             => 1280,
        'height'            => 700, 
        'flex-width'         => true,
        'flex-height'       => false,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'rockyroutes_custom_header_setup' );

/* 
======================================
CUSTOM POST TYPE - ROUTES
======================================
*/

function rockyroutes_custom_post_type (){

    $labels = array(
        'name' => 'Routes',
        'singular' => 'Route',
        'add_new' => 'Add Route',
        'all_items' => 'All Routes',
        'add_new_item' => 'Add new Route',
        'edit_item' => 'Edit Route',
        'new_item' => 'New Route',
        'view item' => 'View Route',
        'search_items' => 'Search Route',
        'not_found' => 'Route not found',
        'not_found_in_trash' => 'No routes found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'support' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'menu_position' => 5,
        'exclude_from_search' => false,
    );

    register_post_type( 'routes', $args );
}

add_action( 'init', 'rockyroutes_custom_post_type' );

function rockyroutes_custom_taxonomies() {
    
    // Register Custom Taxonomy for route grade

	$labels = array(
		'name'                       => _x( 'Grade', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Grade', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Grade', 'text_domain' ),
		'all_items'                  => __( 'All Grades', 'text_domain' ),
		'new_item_name'              => __( 'New Grade Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Grade', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Grade', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate grades with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove grades', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Grades', 'text_domain' ),
		'search_items'               => __( 'Search Grades', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Grades list', 'text_domain' ),
		'items_list_navigation'      => __( 'Grades list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array( 'slug' => 'grade'),
    );
    
    // Register Custom Taxonomy for route height

	$labels_Distance = array(
		'name'                       => _x( 'Distance', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Distance', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Distance', 'text_domain' ),
		'all_items'                  => __( 'All Distances', 'text_domain' ),
		'new_item_name'              => __( 'New Distance Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Distance', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Distance', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Distances with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Distances', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Distances', 'text_domain' ),
		'search_items'               => __( 'Search Distances', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Distances list', 'text_domain' ),
		'items_list_navigation'      => __( 'Distances list navigation', 'text_domain' ),
	);
	$args_distance = array(
        'labels'                     => $labels_Distance,
        'description'                => 'Enter the Distance of the route without the unit. All Distances must be in the same unit.', 
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                   => array( 'slug' => 'Distance'),
    );
    
    register_taxonomy( 'grade', array( 'routes' ), $args );
    register_taxonomy( 'distance', array('routes'), $args_distance);

}
add_action( 'init', 'rockyroutes_custom_taxonomies', 0 );



?>