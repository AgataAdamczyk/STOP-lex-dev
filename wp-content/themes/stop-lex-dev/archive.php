<?php
/**
 * Archive Pages Template
 *
 *
 * @package CodeLauralian Theme
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$sections_path = 'template-parts/publications/section';

get_template_part($sections_path, 'content');

get_footer();
