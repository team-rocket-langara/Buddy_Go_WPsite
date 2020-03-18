<?php
    get_header( );

    // MAIN CONTENT COMES IN HERE
	 if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; 
        endif;

    get_footer( );
?>