<?php

/**
 * Register custom theme options displayed in customizer
 *
 * @package WordPress
 * @subpackage CodeLauralian Theme
 */

codelauralian_security_check();

if (!function_exists('codelauralian_customize_contact')) {
    function codelauralian_customize_contact($wp_customize)
    {
        $wp_customize->add_section('codelauralian_contact', array(
            'title'      => __('Informacje o firmie', 'codelauralian'),
        ));

        // Address
        $wp_customize->add_setting('codelauralian_contact_address', array(
            'transport' => 'refresh',
            'type'      => 'option'
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codelauralian_contact_address', array(
            'label'      => __('Adres siedziby', 'codelauralian'),
            'section'    => 'codelauralian_contact',
            'settings'   => 'codelauralian_contact_address',
            'type'       => 'textarea'
        )));

        // Address - link
        $wp_customize->add_setting('codelauralian_contact_address_link', array(
            'transport' => 'refresh',
            'type'      => 'option'
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codelauralian_contact_address_link', array(
            'label'      => __('Adres - link do google', 'codelauralian'),
            'section'    => 'codelauralian_contact',
            'settings'   => 'codelauralian_contact_address_link',
            'type'       => 'text'
        )));

        // Phone number
        $wp_customize->add_setting('codelauralian_contact_phone', array(
            'transport' => 'refresh',
            'type'      => 'option'
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codelauralian_contact_phone', array(
            'label'      => __('Nr telefonu', 'codelauralian'),
            'section'    => 'codelauralian_contact',
            'settings'   => 'codelauralian_contact_phone',
            'type'       => 'text'
        )));

        // E-mail
        $wp_customize->add_setting('codelauralian_contact_email', array(
            'transport' => 'refresh',
            'type'      => 'option'
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codelauralian_contact_email', array(
            'label'      => __('E-mail', 'codelauralian'),
            'section'    => 'codelauralian_contact',
            'settings'   => 'codelauralian_contact_email',
            'type'       => 'text'
        )));

        // Socials - Facebook
        $wp_customize->add_setting('codelauralian_contact_facebook', array(
            'transport' => 'refresh',
            'type'      => 'option'
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codelauralian_contact_facebook', array(
            'label'      => __('Facebook - link', 'codelauralian'),
            'section'    => 'codelauralian_contact',
            'settings'   => 'codelauralian_contact_facebook',
            'type'       => 'text'
        )));

        // Socials - Instagram
        $wp_customize->add_setting('codelauralian_contact_instagram', array(
            'transport' => 'refresh',
            'type'      => 'option'
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codelauralian_contact_instagram', array(
            'label'      => __('Instagram - link', 'codelauralian'),
            'section'    => 'codelauralian_contact',
            'settings'   => 'codelauralian_contact_instagram',
            'type'       => 'text'
        )));

        // Socials - LinkedIn
        $wp_customize->add_setting('codelauralian_contact_linkedin', array(
            'transport' => 'refresh',
            'type'      => 'option'
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codelauralian_contact_linkedin', array(
            'label'      => __('LinkedIn - link', 'codelauralian'),
            'section'    => 'codelauralian_contact',
            'settings'   => 'codelauralian_contact_linkedin',
            'type'       => 'text'
        )));
    }
}

add_action('customize_register', 'codelauralian_customize_contact');
