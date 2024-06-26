<?php
/**
 * Template for Publications posts
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

get_header();

$sections_path = 'template-parts/publications/section';

get_template_part($sections_path, 'content');

get_footer();
