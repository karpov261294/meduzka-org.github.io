<?php 
function lemmer_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	//wp_enqueue_script( 'script-name', get_template_directory_uri()) . '/js/example.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'lemmer_scripts' );