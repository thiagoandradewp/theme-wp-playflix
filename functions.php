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

function playflix_admin_scripts (){
    wp_enqueue_style('playflix-styles', get_stylesheet_directory_uri() . '/style.css');
    //wp_enqueue_style('playflix-styles', get_stylesheet_directory_uri() .'./style.css');
}

add_action('wp_enqueue_scripts','playflix_admin_scripts');