<?php
/**
 * Template for Front-page
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

get_header();

$sections_path = 'template-parts/front-page/section';

get_template_part($sections_path, 'hero');
get_template_part($sections_path, 'publications');
get_template_part($sections_path, 'about-us');
get_template_part($sections_path, 'contact');

get_footer();
