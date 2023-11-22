<?php
/**
 * All nav menus goes here
 *
 * @package ApploverTheme
 */


codelauralian_security_check();

if ( ! function_exists( 'codelauralian_nav_menus' ) ) {
    function codelauralian_nav_menus() {
        register_nav_menus( array(
            'header'   => __('Display this menu in header', 'codelauralian'),
            'footer'   => __('Display this menu in footer', 'codelauralian')
        ) );
    }
}

add_action( 'after_setup_theme', 'codelauralian_nav_menus' );
