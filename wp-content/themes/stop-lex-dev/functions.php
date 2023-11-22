<?php
/**
 * Functions and definitions
 *
 * @package CodeLauralian Theme
 */

// Load custom helper functions - must go first
require_once get_template_directory() . '/inc/template-functions.php';
codelauralian_security_check();

// Add all additional modules here
$includes = array(
    '/theme-settings.php', // Theme setup
    '/theme-tags.php', // Theme setup
    '/image-sizes.php', // Register image sizes
    '/nav-menus.php', // Register nav menus
    '/enqueue.php', // Enqueue styles and scripts
    '/customizer.php', // Custom options
    '/option-pages.php', // Load custom option pages
    '/walkers/vendor/class-wp-bootstrap-navwalker.php', // Load Bootstrap nav walker
    '/custom-post-types/examples.php', // CTP: Example custom post types
    '/pagination.php', // Custom Bootstrap Pagination
);

// Load all declared modules
foreach ($includes as $file) {
    $filepath = locate_template('inc' . $file);
    if ( ! $filepath) {
        trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
    }
    require_once $filepath;
}
