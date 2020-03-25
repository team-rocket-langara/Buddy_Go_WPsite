<div id='team'>
<?php 
 $args = array(
    'category_name' => 'aboutUs',
  );
    
  $aboutUs_query = new WP_Query( $args );
  
  if ( $aboutUs_query -> have_posts() ) :
    while ( $aboutUs_query -> have_posts() ) :
      $aboutUs_query -> the_post();
      get_template_part('parts/aboutUs/templates/content');
    endwhile;
    else :
      get_template_part('parts/aboutUs/templates/content-none.php');
  endif;  
?>
</div>