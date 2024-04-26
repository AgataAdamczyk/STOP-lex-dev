<?php

/**
 * Register custom option pages
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

codelauralian_security_check();

if (!function_exists('codelauralian_add_option_pages')) {
    function codelauralian_add_option_pages()
    {
	    if (function_exists('acf_add_options_page')) {
		    acf_add_options_page(array(
			    'page_title' => __('Stopka', 'codelauralian'),
			    'menu_title' => __('Stopka', 'codelauralian'),
			    'menu_slug' => 'footer-settings',
		    ));
	    }
    }
}

add_action('init', 'codelauralian_add_option_pages');
