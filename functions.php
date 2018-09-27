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
        'width'             => 100,
        'height'            => 100, 
        'flex-width'         => true,
        'flex-height'       => false,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'rockyroutes_custom_header_setup' );


?>