<?php

/**
 * Custom helper functions that can be used accross the theme
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Prevent direct access
if ( ! function_exists( 'codelauralian_security_check' ) ) {
    function codelauralian_security_check() {
        if ( ! defined( 'ABSPATH' ) ) {
            exit;
        }
    }
}

if (!function_exists('is_repeater_empty')) {
	function is_repeater_empty( $customField ) {
		$isntEmpty = 0;
		if ( $customField ) {
			foreach ( $customField as $field ) {
				if ( $field ) {
					foreach ( $field as $subfield ) {
						if ( $subfield ) {
							$isntEmpty = 1;
						}
					}
				}
			}
		}
		return $isntEmpty;
	}
}
