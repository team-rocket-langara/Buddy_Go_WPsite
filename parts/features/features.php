<div class='features' id='features'>
  <?php 
  $args = array(
      'category_name' => 'features',
    );
      
    $features_query = new WP_Query( $args );
    
    if ( $features_query -> have_posts() ) :
      while ( $features_query -> have_posts() ) :
        $features_query -> the_post();
        get_template_part('parts/features/templates/content');
      endwhile;
      else :
        get_template_part('parts/features/templates/content-none.php');
    endif;  
  ?>
</div>