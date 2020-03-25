<div id='contact'>
  <?php 
  $args = array(
      'category_name' => 'contact',
    );
      
    $contact_query = new WP_Query( $args );
    
    if ( $contact_query -> have_posts() ) :
      while ( $contact_query -> have_posts() ) :
        $contact_query -> the_post();
        get_template_part('parts/contact/templates/content');
      endwhile;
      else :
        get_template_part('parts/contact/templates/content-none.php');
    endif;  
  ?>
</div>