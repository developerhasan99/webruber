<?php 

function wpse_173601_enqueue_scripts() {
    wp_scripts() -> add_data( 'jquery', 'group', 1 );
    wp_scripts() -> add_data( 'jquery-core', 'group', 1 );
    wp_scripts() -> add_data( 'jquery-migrate', 'group', 1 );
  }
  add_action( 'wp_enqueue_scripts', 'wpse_173601_enqueue_scripts' );

?>