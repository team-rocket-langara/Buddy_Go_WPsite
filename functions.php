<?php

    if( ! function_exists( 'buddyGo_setup' )) :
        function buddyGo_setup(){
            add_theme_support( 'automatic-feed-links' );
            add_theme_support( 'title-tag' );
            add_theme_support( 'HTML5' );
        }

    endif;

    add_action('after_setup_theme', 'buddyGo_setup');

    function buddyGo_scripts_styles(){
        wp_enqueue_style('buddyGo_style, get_stylesheet_uri()');
    };

    add_action('wp_enqueue_scripts',
    'buddyGo_scripts_styles');