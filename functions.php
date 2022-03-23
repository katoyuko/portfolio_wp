<?php

function my_enqueue_styles() {
  wp_enqueue_style('ress',get_template_directory_uri().'/css/reset.css');
  wp_enqueue_style('style',get_template_directory_uri().'/style.css');
  wp_enqueue_script('script',get_template_directory_uri().'/js/script.js');
}
add_action('wp_enqueue_scripts','my_enqueue_styles');

// 使用したい機能を有効化する
add_theme_support('post-thumbnails');
