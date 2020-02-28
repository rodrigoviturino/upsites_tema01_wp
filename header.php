<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tema 01</title>

    <?php wp_head(); ?>

</head>
<body>

<header class="header">
    <!-- row Top -->
    <section class="header__rowTop">
        <div class="container">
            <div class="row align-items-center">
                <div class="header__rowTop__columnLeft col-md-9 col-6">
                    <ul class="">

                        <?php if(get_theme_mod('up_facebook') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_facebook'); ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(get_theme_mod('up_twitter') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_twitter'); ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(get_theme_mod('up_instagram') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_instagram'); ?>">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(get_theme_mod('up_linkedin') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_linkedin'); ?>">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
                <div class="header__rowTop__columnRight col-md-3 col-6">
                    <p>REQUEST FOR QUOTE</p>
                </div>
            </div>
        </div>
    </section>
    <!-- row Top -->

    <section class="header__rowCenter">
        <div class="container">
            <div class="row wrapper align-items-center justify-content-between">
                <div class="col-md-6 col-12 header__rowCenter__logo">
                    <a href="<?php bloginfo('url'); ?>">
                        <?php
                            if(function_exists('the_custom_logo') ) {
                                the_custom_logo();
                            }
                        ?>
                    </a>
                </div>

                <div class="col-md-4 col-12 header__rowCenter__office d-flex justify-content-end">
                    <ul class="list-unstyled">
                        <li class="item">
                            <a href="#">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                            </a>
                        </li>
                        <li class="item">
                            <?php if(get_theme_mod('up_nome_escriorio') ) : ?>
                                <p class=""><?php echo get_theme_mod('up_nome_escriorio') ?></p>
                            <?php endif; ?>

                            <?php if(get_theme_mod('up_endereco_escriorio') ) : ?>
                                <p class=""><?php echo get_theme_mod('up_endereco_escriorio') ?></p>
                                <!-- <p class="">325 admiral unit, North cost, USA</p> -->
                            <?php endif; ?>

                        </li>
                    </ul>
                </div>

                <div class="col-md-2 col-12 header__rowCenter__contact d-flex justify-content-end">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i class="fas fa-mobile-alt fa-2x"></i>
                            </a>
                        </li>
                        <li class="mr-0">
                            <?php if(get_theme_mod('up_telefone') ) : ?>
                                <p class=""><?php echo get_theme_mod('up_telefone') ?></p>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Menu -->
    <section class="header__rowBottom">
        <div class="container">
            
            <nav class="navbar navbar-expand-lg navbar-light ">

                <button class="navbar-toggler order-sm-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""><i class="fas fa-bars text-white"></i></span>
                </button>
            
                <div class="collapse navbar-collapse order-sm-1 order-3" id="navbarSupportedContent">

                <?php 
                    if( has_nav_menu('main-menu') ) {
                        wp_nav_menu([
                            'theme_location' => 'main-menu',
                            'fallback_cb' => false,
                            'container_class' => null,
                            'container_id' => 'navbarResponsive',
                            'menu_class' => 'navbar-nav mr-auto'
                        ]);
                    }
                ?>

                    <!-- <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Company<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Cases<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">News<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Pages<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact<span class="sr-only">(current)</span></a>
                        </li>

                    </ul> -->
                
                </div>

                <ul class="wrapper d-flex align-items-center order-2">
                    <li>
                    <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn lang text-white"><img src="<?php echo get_template_directory_uri() ?>./public/images/icon-lang.png" alt="">USA Office</button>

                            <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>

                        </div>

                        </li>

                        <li class="mx-3">
                            <a href="#">
                                <i class="fas fa-shopping-cart text-warning"></i>
                            </a>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="fas fa-search text-warning"></i>
                            </a>
                        </li>
                </ul>
            </nav>

            </div>
        </div>
    </section>
    <!-- Menu -->

    

</header>