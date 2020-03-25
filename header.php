<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="page" id="page">
            <!-- HEADER PART -->
            <header class="site-header">
                <?php
                    the_custom_logo( );

                    wp_nav_menu(array(
                        'theme_location' => 'menu-main',
                        'menu_id' => 'menu-main',
                        'menu_class' => 'menu-primary menu',
                        'container' => 'nav',
                    )); 
                ?>
            </header>

            <!-- START OF CONTENTS -->
            <main class="site-main">