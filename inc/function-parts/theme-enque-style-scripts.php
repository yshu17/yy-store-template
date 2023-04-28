<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action( 'wp_enqueue_scripts', function() { 
	wp_enqueue_style('fontsGoogle', 'https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300;400;500;600;700&display=swap', false, null);
	wp_enqueue_style('bootstrap-5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css', false, null);
	wp_enqueue_style('Bootstrap Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css', false, null);
	wp_enqueue_style( 'main-style', get_stylesheet_uri(), array('bootstrap-5'), null);

	add_filter( 'style_loader_tag', function($html, $handle) {
		if ( $handle === 'bootstrap-5' ) { 
			$html = str_replace( "rel='stylesheet'", "rel='stylesheet' integrity='sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp' crossorigin='anonymous'", $html );
		}
		return $html;
	}, 10, 2 );
	
	
});

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.4.min.js', false, null, true);
	wp_enqueue_script('jquery');

	wp_enqueue_script('bootstrap-bandle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js', false, null, true);
	wp_enqueue_script('image-to-svg', get_template_directory_uri() . '/assets/js/img-to-svg.min.js', array('jquery'), null, true);
	
	wp_enqueue_script('ajax-search', get_template_directory_uri() . '/assets/js/ajax-search.js', array('jquery'), null, true);
	wp_localize_script( 'ajax-search','search_form' , array(
		'url'=> admin_url( 'admin-ajax.php' ),
		'nonce'=> wp_create_nonce( 'search-nonce' ),
	));
	
	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
	
	if ( is_page( 'Home' ) ) {
		wp_enqueue_script('three', 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js', false, null, true);
		wp_enqueue_script('vanta', 'https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js', false, null, true);
		wp_enqueue_script('home-script', get_template_directory_uri() . '/assets/js/home.js', array('jquery'), null, true);
	}
		
	add_filter( 'script_loader_tag', function( $tag, $handle) {
		if ( $handle === 'bootstrap-bandle' ) { 
			$tag = str_replace(  '<script', "<script integrity='sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N' crossorigin='anonymous'", $tag );
		}
		return $tag;
	}, 10, 2 );

});

