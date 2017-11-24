<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <?php $home = get_template_directory_uri(); ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title> Blog Vinicius </title>
        <!-- <link rel="stylesheet" href="<?= $home; ?>/normalize.css"> -->
        <link rel="stylesheet" href="<?= $home; ?>/assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?= $home; ?>/assets/css/main.css">
        <!-- <link rel="stylesheet" href="<?= $home; ?>/vendor/font-awesome/css/font-awesome.css"> -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">


        <?php wp_head(); ?>
    </head>
    <body>
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-left">
                    <a class="navbar-brand m-l" href="<?= get_home_url() ?>">
                        <p class="description  hidden-sm hidden-xs">Vinicius</p> </a>

                    <div class="col-xs-12 col-sm-12 hidden-sm hidden-md hidden-lg">
                        <div class="btn-nav off">
                            <span class="sr-only">Esconder </span>
                            <div class="one"></div>
                            <div class="two"></div>
                            <div class="three"></div>
                        </div>
                    </div>
                </div>
                <?php
                    if ( has_nav_menu( 'primary' ) ):
                    wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'container_class' => 'collapse navbar-collapse mynavbar',
                    'menu_class' => 'nav navbar-nav navbar-right font-weight',
                    
                    ) );
                    endif;
                ?>

            </div>
            </div>
           
        </nav>