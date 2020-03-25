<?php

    if( ! function_exists( 'buddyGo_setup' )) :
        function buddyGo_setup(){
            add_theme_support( 'automatic-feed-links' );
            add_theme_support( 'title-tag' );
            add_theme_support( 'HTML5' );
            add_theme_support('post-thumbnails');
            add_theme_support( 'custom-logo' );

            register_nav_menus(array(
                'menu-main' => 'Primary Menu',
                'menu-footer' => 'Secondary Menu',
            ));
        }

    endif;

    add_action('after_setup_theme', 'buddyGo_setup');


    function buddyGo_scripts_styles(){
        wp_enqueue_style('buddyGo_style', get_stylesheet_uri());
        
        wp_enqueue_script( 'buddyGo_js', get_template_directory_uri() . "/js/main.js", array(), null, true );
    };

    add_action('wp_enqueue_scripts','buddyGo_scripts_styles');