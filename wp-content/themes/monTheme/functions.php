<?php

add_action('after_setup_theme',function(){
    add_theme_support('title-tag');
});


add_theme_support('website-logo');


function register_my_menu(){
    register_nav_menu( 'main-menu', 'Menu principal' );
    }
    add_action( 'after_setup_theme', 'register_my_menu' );


    add_theme_support('post-thumbnails');
?>