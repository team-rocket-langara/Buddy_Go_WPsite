<?php ?>
<article <?php post_class(); ?>>
  <div class="entry-thumbnail">
  <?php if( !is_single() ) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        <?php
            else:
              the_post_thumbnail();
            endif;
        ?>
  </div>
  <div class="entry-content">
    <h3 class='post-title' >
    <?php if( !is_single() ) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        <?php
            else:
                the_title();
            endif;
        ?>
    </h3>

    <div>
            <?php 
                if( is_single() ):
                    the_content();
                else:
                    the_excerpt();
                endif;
            ?>
    </div>

  </div>

  <div class="tags">
    <?php the_tags('', ' ', ''); ?>
  </div>

  <?php if( !is_single() ) : ?>
        <button><a href="<?php the_permalink(); ?>">READ MORE</a></button>
  <?php endif ?>

</article>