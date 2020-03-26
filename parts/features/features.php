<div class='features' id='features'>
  <h2>Features</h2>

  <div class='featurePosts'>
    <?php 
    $args = array(
        'category_name' => 'features',
        'order' => 'ASC'
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
</div>