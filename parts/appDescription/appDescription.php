<?php 
 $args = array(
    'category_name' => 'appDescription',
  );
    
  $appDescription_query = new WP_Query( $args );
  
  if ( $appDescription_query -> have_posts() ) :
    while ( $appDescription_query -> have_posts() ) :
      $appDescription_query -> the_post();
      get_template_part('parts/appDescription/templates/content');
    endwhile;
    else :
      get_template_part('parts/appDescription/templates/content-none.php');
  endif;  
?>