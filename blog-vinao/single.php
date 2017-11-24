<?php get_header(); ?>

<?php

if( have_posts() ) {
    while( have_posts() ) {
        the_post();
       setPostViews(get_the_ID());
?>

    <header class="pt-xs-100 pb-xs-50 pt-sm-0 pb-sm-20">
        <div class="container pt-sm-100 pt-md-130 pb-md-30">
            <div class="row pb-xs-30 pb-md-30 pb-sm-60">
                <div class="col-sm-12 col-md-12 col-xs-10 col-sm-offset-0 col-xs-offset-1 col-md-offset-0">
                    <div class="mw800 m-a">
                        <h1 class="c-grey text-left">
                            <?php the_title(); ?>
                            <br>
                            <small>
                               <?php the_time( get_option( 'date_format' ) ); ?>
                            </small> </h1>
                    </div>


                </div>
            </div>
            <div class="row pt-md-40 p-r-xs">
                <div class="col-md-12 p-a-0 overflow-h post-thumb-single">
                    <?= the_post_thumbnail( '', array( 'class' => 'img-post-single' ) ); ?>
                </div>
                <div class="meta-single hidden-md hidden-lg">
                    <?php $categoria = get_the_category()[0]; ?>
                    <p class="<?= $bg_color[$categoria->term_id] ?> upper cat-single">
                        <?= $categoria->name ?>
                    </p>
                </div>
            </div>

        </div>
    </header>

    <div class="container" id="postcontent" tabindex="-1">
        <div class="row">
            <div class="col-lg-12 box-father">
                <div class="intro-text m-a pb-xs-40 pb-sm-40 pt-sm-40 pt-md-0">
                    <p>
                        <?php the_content(); ?> </p>
                </div>
            </div>
        </div>
    </div>


    <section id="container-comments">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-xs-10 col-xs-offset-1 col-lg-offset-0 pt-xs-40">
                    <?php comments_template(); ?>
                </div>
            </div>

        </div>
    </section>


    <?php
    }
}
?>
        <?php get_footer(); ?>
