<div id='blog'>
    <h2>Buddy News</h2>

    <div class='blogPosts'>
        <?php 
            $args = array(
                'category_name' => 'blog',
            );
                
            $blog_query = new WP_Query( $args );
            
            if ( $blog_query -> have_posts() ) :
                while ( $blog_query -> have_posts() ) :
                $blog_query -> the_post();
                get_template_part('parts/blog/templates/content');
                endwhile;
                else :
                get_template_part('parts/blog/templates/content-none.php');
            endif;  
        ?>
    </div>
</div>