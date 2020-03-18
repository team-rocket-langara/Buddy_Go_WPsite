<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="page" id="page">
            <header class="site-header">
                <img src="<?php bloginfo('template_directory'); ?>/img/Buddy_Go_logo_header_s.png" alt="A logo of Buddy,Go!">

                <?php wp_nav_menu(array(
                    'theme_location' => 'menu-main',
                    'menu_id' => 'menu-main',
                    'menu_class' => 'menu-primary menu',
                    'container' => 'nav',
                )); ?>

                <ul>
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </header>

            <main class="site-main">

        