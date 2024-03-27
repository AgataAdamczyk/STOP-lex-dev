<?php

/**
 * Register all styles and scripts
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

codelauralian_security_check();

if ( ! function_exists( 'codelauralian_enqueue_styles' ) ) {
    function codelauralian_enqueue_styles() {
        $css_path = get_template_directory_uri() . '/assets/main.css';
        $css_version = filemtime(get_template_directory() . '/assets/main.css');
        wp_enqueue_style( 'codelauralian-styles', $css_path, NULL, $css_version );
    }
}

if ( ! function_exists( 'codelauralian_enqueue_scripts' ) ) {
    function codelauralian_enqueue_scripts() {
        $js_path = get_template_directory_uri() . '/assets/main.js';
        $js_version = filemtime(get_template_directory() . '/assets/main.js');
        wp_enqueue_script( 'codelauralian-scripts', $js_path, NULL, $js_version, true );
    }
}

add_action( 'wp_enqueue_scripts', 'codelauralian_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'codelauralian_enqueue_scripts' );
