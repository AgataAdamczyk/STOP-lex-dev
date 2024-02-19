<?php

/**
 * Default "Post" post type settings
 *
 * @package CodeLauralian Theme
 */

codelauralian_security_check();

// Excerpt setup
if (!function_exists('codelauralian_excerpt_more')) {
    function codelauralian_excerpt_more($more) {
      return '...';
    }
}

if (!function_exists('codelauralian_excerpt_length')) {
    function codelauralian_excerpt_length($length) {
      return 35;
    }
}

add_filter('excerpt_more', 'codelauralian_excerpt_more');
add_filter('excerpt_length', 'codelauralian_excerpt_length');
