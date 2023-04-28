<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

function yy_store_setup() {

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support('html5', array (
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('custom-background', apply_filters('yy_store_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    )));
    add_theme_support('custom-logo', array ( 
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    load_theme_textdomain( 'yy-store', get_template_directory() . '/languages' );
    register_nav_menus(array('menu-1' => esc_html__( 'Primary', 'yy-store' ),));

}
add_action( 'after_setup_theme', 'yy_store_setup' );

