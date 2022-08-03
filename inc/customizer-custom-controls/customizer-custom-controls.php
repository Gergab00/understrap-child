<?php


$path = '/inc/customizer-custom-controls';

/**
 * Enqueue our scripts and styles
 */
add_action( 'wp_enqueue_scripts', 'enqueue_ccc' );

function enqueue_ccc() {
	wp_enqueue_script( 'skyrocket-select2-js',  get_stylesheet_directory_uri().$path. '/js/select2.full.min.js', array( 'jquery' ), '4.0.13', true );
	wp_enqueue_script( 'skyrocket-custom-controls-js',  get_stylesheet_directory_uri().$path. '/js/customizer.js', array( 'jquery', 'jquery-ui-core', 'skyrocket-select2-js', 'wp-color-picker' ), '1.0', true );
	wp_enqueue_style( 'skyrocket-custom-controls-css',  get_stylesheet_directory_uri().$path. '/css/customizer.css', array('wp-color-picker'), '1.0', 'all' );
	wp_enqueue_style( 'skyrocket-select2-css',  get_stylesheet_directory_uri().$path. '/css/select2.min.css', array(), '4.0.13', 'all' );
}

require_once  get_theme_file_path($path. '/inc/custom-controls.php');
