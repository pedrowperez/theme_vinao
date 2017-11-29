<?php get_header(); ?>


<main class="home-main">
    <div class="container-fluid">
        <div class="row">
            <?php
           
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $postper = array (
                    'posts_per_page' => 6,
                    'paged' => $paged,

                );
                
                $querypostper = new WP_Query( $postper );
                $i = 1;
                if ( $querypostper->have_posts() ) : 
                    while ( $querypostper->have_posts() ) : 
                        $querypostper->the_post();
                        
            ?>
            
            <article class="col-xs-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-sm-6 col-md-4 col-lg-3 post">
                <div class="content-geral">
                    <div class="content-image">
                        <a href="<?php the_permalink();?>">
                            <?php 
                  if(get_the_post_thumbnail($value->ID)) 
                  {
                        echo get_the_post_thumbnail($value->ID, $size = 'post-thumbnail', array( 'class' => 'featured-image-thumb' ));
                  }
                  else 
                  {
            ?>
                            <img src="http://via.placeholder.com/650x400" alt="" />
                            <?php } ?>
                        </a>
                    </div>
                </div>
            </article>

                <?php $i++; endwhile; ?>
                
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php
                $paginateArgs = array(
                    'format'  => '?paged=%#%',
                    'current' => $paged,
                    'total'   => $querypostper->max_num_pages
                ); ?>
                <div class="navigation">
                    
                    <?= paginate_links( $paginateArgs ); ?>
                </div>

                </div>
              
                
                <? else: ?>
                <div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-12 col-md-12 col-lg-12">
                <h2>
                    <?php _e('Desculpe, não foi localizado nenhum post.'); ?>
                </h2>
                </div>
                <?php endif; ?>

        </div>
    </div>
     
</main>


<?php get_footer();?>
