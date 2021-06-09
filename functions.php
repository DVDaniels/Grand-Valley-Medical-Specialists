<?php 

function GVMC_files() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.15.3/css/all.css');
    wp_enqueue_style('GVMC_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'GVMC_files');

function GVMC_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('thumbLandscape', 300, 193, true);

}

add_action('after_setup_theme', 'GVMC_features');