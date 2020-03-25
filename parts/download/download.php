<div id='download'>
  <?php 
  $args = array(
      'category_name' => 'download',
    );
      
    $download_query = new WP_Query( $args );
    
    if ( $download_query -> have_posts() ) :
      while ( $download_query -> have_posts() ) :
        $download_query -> the_post();
        get_template_part('parts/download/templates/content');
      endwhile;
      else :
        get_template_part('parts/download/templates/content-none.php');
    endif;  
  ?>
</div>