<?php

/**
 * Register custom post type: Example
 *
 * @package ApploverTheme
 */

codelauralian_security_check();

if (!function_exists('codelauralian_init_cpt_examples')) {
    function codelauralian_init_cpt_examples(){
        $labels = array(
            'name'                  => __('Examples', 'codelauralian'),
            'singular_name'         => __('Example', 'codelauralian'),
            'menu_name'             => __('Examples', 'codelauralian'),
            'name_admin_bar'        => __('Example', 'Add New on Toolbar', 'codelauralian'),
            'add_new'               => __('Add New', 'codelauralian'),
            'add_new_item'          => __('Add New Example', 'codelauralian'),
            'new_item'              => __('New Example', 'codelauralian'),
            'edit_item'             => __('Edit Example', 'codelauralian'),
            'view_item'             => __('View Example', 'codelauralian'),
            'all_items'             => __('All Examples', 'codelauralian'),
            'search_items'          => __('Search Example', 'codelauralian'),
            'parent_item_colon'     => __('Parent Example:', 'codelauralian'),
            'not_found'             => __('No Example found.', 'codelauralian'),
            'not_found_in_trash'    => __('No Example found in Trash.', 'codelauralian'),
            'archives'              => __('Example archives', 'codelauralian'),
            'uploaded_to_this_item' => __('Uploaded to this Example', 'codelauralian'),
            'filter_items_list'     => __('Filter Examples list', 'codelauralian'),
            'items_list_navigation' => __('Examples list navigation', 'codelauralian'),
            'items_list'            => __('Examples list', 'codelauralian')
        );

        $args = array(
                'labels'             => $labels,
                'description'        => 'Examples custom post type.',
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array('slug' => 'examples', 'with_front' => false),
                'capability_type'    => 'post',
                'has_archive'        => false,
                'supports'           => array('title', 'editor', 'thumbnail'),
                'show_in_rest'       => true,
                'menu_icon'          => 'dashicons-html'
            );

        register_post_type('example', $args);
    }
}

if (!function_exists('codelauralian_init_ct_examples_category')) {
    function codelauralian_init_ct_examples_category(){
        $labels = array(
            'name'              => __('Examples categories', 'codelauralian'),
            'singular_name'     => __('Example category', 'codelauralian'),
            'search_items'      => __('Search example categories', 'codelauralian'),
            'all_items'         => __('All example categories', 'codelauralian'),
            'parent_item'       => __('Parent example category', 'codelauralian'),
            'parent_item_colon' => __('Parent example category:', 'codelauralian'),
            'edit_item'         => __('Edit example category', 'codelauralian'),
            'update_item'       => __('Update example category', 'codelauralian'),
            'add_new_item'      => __('Add new example category', 'codelauralian'),
            'new_item_name'     => __('New example category', 'codelauralian'),
            'menu_name'         => __('Example categories', 'codelauralian'),
        );

        $args = array(
            'hierarchical'      => false,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'example_category'),
            'show_in_rest'      => true
        );

        register_taxonomy('example_category', ['example'], $args);
    }
}

//add_action('init', 'codelauralian_init_cpt_examples');
//add_action('init', 'codelauralian_init_ct_examples_category');
