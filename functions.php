<?php 

    /**
     *  Function that add style for the theme
     *  wp_enqueue_style()
     */

    function add_style_theme(){

        wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/resources/css/main.css');

    }

    /**
     *  Function that add script for the theme
     *  wp_enqueue_script()
     */

    function add_script_theme(){

        wp_enqueue_script( 'script', get_template_directory_uri() . '/resources/js/js.css');

    }
    