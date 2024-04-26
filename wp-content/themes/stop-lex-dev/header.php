<!doctype html>
<html <?php language_attributes(); ?>>

  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="theme-color" content="#FFFFFF">
      <meta name="apple-mobile-web-app-status-bar-style" content="#FFFFFF">
      <?php wp_head(); ?>
      <title>STOP Lex Developer</title>
  </head>

  <body <?php body_class(); ?>>
    <!-- Main header -->
    <header class="navbar navbar-expand-lg" id="nav-header">
        <div class="container">
            <div class="navbar-brand">
                <?php
	                if ( function_exists( 'the_custom_logo' ) ) {
		                the_custom_logo();
	                }
                ?>
            </div>

            <button class="navbar-toggler" type="button" data-offcanvas-toggler data-toggle="offcanvas" data-target="#offcanvas" aria-controls="offcanvas" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="sr-only">Open menu</span>
            </button>

            <nav class="navbar-nav d-none d-lg-flex">
                <?php wp_nav_menu(array(
                    'theme_location'  => 'header',
                    'container'       => false,
                    'menu_class'      => 'nav nav--header navbar-nav justify-content-end flex-grow-1',
                    'walker'          => new WP_Bootstrap_Navwalker()
                )); ?>
            </nav>
        </div>
    </header>

    <!-- Page content -->
    <div class="main" id="main-content">
