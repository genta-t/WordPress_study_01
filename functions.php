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

    register_post_type('item', [ //register post typeでドキュメント
        'labels' => [
            'name' => '商品',
            'singular_name' => '商品',
            'add_new' => '商品を追加',
            'add_new_item' => '商品を追加',
            'edit_item' => '商品を編集',
            'new_item' => '新しい商品',
            'all_items' => 'すべての商品',
            'view_item' => '商品をみる',
            'search_items' => '商品を探す',
            'not_found' => '商品は見つかりませんでした',
            'not_found_in_trash' => 'ゴミ箱は空です',
            'parent_item_colon' => '',
            'menu_name' => '商品',
        ],
        'public' => true,
        'has_archive' => true,
        'hierarchical' => true, //商品などはtrueにして親として紐づけることもある。投稿などはfalseで親として紐付けない。
        'supports' => [
            'title',
            'editor',
            'page-attributes',
        ],
        'menu_position' => 5, //管理画面の左側のバーの表示順
        'menu_icon' => 'dashicons-cart', // アイコン選ぶ-> https://developer.wordpress.org/resource/dashicons/#analytics
    ]);
}

add_action('init', 'init_func');
