<?php 

get_header(); 

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    get_template_part('parts/blog/templates/content');
  endwhile;
  else :
    get_template_part('parts/blog/templates/content-none.php');
endif;  

get_footer();