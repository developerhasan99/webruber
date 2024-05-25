<?php 

function add_theme_scripts() {
    // Load all styles
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', false );
    wp_enqueue_style( 'woocommerce-css', get_template_directory_uri() . '/static/css/woocommerce.css', [], '1.1', 'all' );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/static/css/bootstrap.css', [], '1.1', 'all' );
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );

    //Load All Js
    wp_enqueue_script( 'script', get_template_directory_uri() . '/static/js/main.js', array ( 'jquery' ), 1.1, true);
    // Load Comment Replay Js
    if( is_singular() && get_option( 'thread_comments' )) { 
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>