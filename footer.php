            </main><!-- .site-main -->

            <footer class="site-footer">
                <img src="<?php bloginfo('template_directory'); ?>/img/Buddy_Go_logo_footer_s.png" alt="A logo of Buddy,Go!">

                <?php wp_nav_menu(array(
                    'menu' => 'MAIN MENU',
                    'theme_location' => 'menu-secondary',
                    'menu_id' => 'menu-footer',
                    'menu_class' => 'menu-footer menu',
                    'container' => 'nav',
                )); ?>
            </footer>
        </div><!-- .page -->
        <?php wp_footer(); ?>
    </body>
</html>