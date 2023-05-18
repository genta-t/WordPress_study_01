<?php

function my_theme_scripts()
{
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

function init_func()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('init', 'init_func');
