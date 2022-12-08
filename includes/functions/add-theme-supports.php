<?php 

add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );
add_theme_support( 'widgets' );
add_theme_support('post-thumbnails');
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'customize-selective-refresh-widgets' );
register_nav_menus( array( 'top-menu' => __('Top Menu','ruber') ) );

?>