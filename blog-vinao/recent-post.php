<?php 

    $class_color = array( 2 => "c-roxocat" , 3 => "c-bluecat", 4 => "c-orangecat", 5 => "c-greencat");

?>
<section class="hidden-xs mt-md-30 mt-sm-50" id="recentPOST">
    <?php
   $the_query = new WP_Query( array(
      'posts_per_page' => 1,
   )); 

?>
        <div class="container">
            <article class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 bg-recent-post">
                    <div class="col-sm-12 col-md-7 ov-hi">
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <a href="<?php the_permalink();?>">
                            <?php 
                  if(get_the_post_thumbnail($value->ID)) 
                  {
                        echo get_the_post_thumbnail($value->ID, $size = 'post-thumbnail', array( 'class' => 'img-recent-post' ));
                  }
                  else 
                  {
            ?>
                            <img src="http://via.placeholder.com/650x400" alt="" />
                            <?php } ?>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 pt-lg-40 pt-md-0 pb-md-0 p-a-40 pt-sm-30 pb-sm-30 pt-xs-30 pb-xs-30">
                        <?php $categoria = get_the_category()[0]; ?>
                        <p class="<?= $class_color[$categoria->term_id] ?> upper category-style">
                            <?= $categoria->name ?>
                        </p>
                        <h1 class="mt-md-0 pt-lg-0 pb-lg-10 recent-post-title">
                            <a href="<?php the_permalink();?>">
                                <?= max_title_length(get_the_title() , 70); ?> </a>
                        </h1>

                        <p class="recent-post-content"><?=  get_the_excerpt(); ?></p>
                            
                            <p class="recent-post-le"><br>  <a href="<?php the_permalink(); ?>">
                                        Leia mais </a> </p>
                                
                                <p class="pt-sm-30 recent-post-date">
                                    <?php the_time( get_option( 'date_format' ) ); ?> | Por
                                    <?php the_author_posts_link() ?>
                                </p>
                    </div>
                </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <?php endif; ?>
            </article>
            </article>
        </div>
</section>
