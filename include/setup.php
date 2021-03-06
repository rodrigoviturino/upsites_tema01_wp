<?php

function up_theme_styles(){
    $version = date('hmi');

    // CSS
        wp_enqueue_style('up_theme_css', get_template_directory_uri() . '/public/theme.min.css', [] , $version, false);
        wp_enqueue_style('up_fontawesome_css', get_template_directory_uri() . '/public/fonts/fonts.css', [] , $version, false);

    // JAVASCRIPT
        wp_enqueue_script('up_jquery_js', get_template_directory_uri() . '/src/js/libs/jquery-3.4.1.min.js', [], true);
        wp_enqueue_script('up_theme_js', get_template_directory_uri() . '/public/theme.min.js', ['up_jquery'], true);
}


// Menu
function up_after_setup(){

    // Thumbnail
    add_theme_support( 'post-thumbnails' );

    add_theme_support('custom-logo', [
   
        $defaults = [
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => ['site-title', 'site-description'],
        ]
        
    ]);

    register_nav_menu('main-menu', ('Menu Principal') );

    register_nav_menu('footer1-menu', ('Footer 1 Menu') );
    register_nav_menu('footer2-menu', ('Footer 2 Menu') );
    register_nav_menu('footer3-menu', ('Footer 3 Menu') );
}