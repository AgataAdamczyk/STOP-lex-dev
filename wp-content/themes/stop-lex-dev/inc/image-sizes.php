<?php

/**
 * Custom image sizes goes here
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

codelauralian_security_check();

if ( ! function_exists( 'codelauralian_image_sizes' ) ) {
    function codelauralian_image_sizes() {
//        add_image_size('blog_post', '360', '180', true);
    }
}

add_action( 'after_setup_theme', 'codelauralian_image_sizes' );
