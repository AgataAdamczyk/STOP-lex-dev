<?php

/**
 * All theme suports goes here
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

codelauralian_security_check();

if ( ! function_exists( 'codelauralian_theme_supports' ) ) {
    function codelauralian_theme_supports() {
        load_theme_textdomain('codelauralian');

        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'menus' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
    }
}

add_action( 'after_setup_theme', 'codelauralian_theme_supports' );
