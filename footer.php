            </main>
            <!-- END OF CONTENTS -->

            <!-- FOOTER PART -->
            <footer class="site-footer">
                <?php the_custom_logo( ); ?>

                <h4>Developed by TEAM ROCKET</h4>

                <?php wp_nav_menu(array(
                    'menu' => 'MAIN MENU',
                    'theme_location' => 'menu-secondary',
                    'menu_id' => 'menu-footer',
                    'menu_class' => 'menu-footer menu',
                    'container' => 'nav',
                )); ?>

            </footer>

        </div>
        <?php wp_footer(); ?>
    </body>
</html>