<?php 

function playflix_setup (){
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'playflix_setup');

function playflix_menu (){
    add_theme_support('menu');
    register_nav_menus( array(
        'header' => 'Header',
        'footer' => 'Footer'
    ));
}

add_action('after_setup_theme','playflix_menu');

