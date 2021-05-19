<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'amaistra_register_nav_menu');

function amaistra_register_nav_menu()
{
    register_nav_menu('top', 'Upper Menu');
}

function style_theme()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('contacts', get_template_directory_uri() . '/assets/css/contacts.css');
    wp_enqueue_style('orders', get_template_directory_uri() . '/assets/css/orders.css');
    wp_enqueue_style('orders', get_template_directory_uri() . '/assets/css/post.css');
    wp_enqueue_style('orders', get_template_directory_uri() . '/assets/css/review.css');
}
function scripts_theme()
{
    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
    wp_enqueue_script('jquery');
}