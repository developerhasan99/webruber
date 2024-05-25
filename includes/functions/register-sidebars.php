<?php 

function arphabet_widget_init() {
    register_sidebar( array(
      'name'          => 'Primary sidebar',
      'id'            => 'primary-sidebar',
      'before_widget' => '<div class="pb-5">',
      'after_widget'  => '</div>',
      'before_title'  => '<h6 class="sidebar-widget-title">',
      'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
      'name'          => 'Header Widget',
      'id'            => 'header-widget',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title'  => '<h6 class="footer-widget-title">',
      'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
      'name'          => 'Footer 1',
      'id'            => 'footer-widget-1',
      'before_widget' => '<div class="pb-5">',
      'after_widget'  => '</div>',
      'before_title'  => '<h6 class="footer-widget-title">',
      'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
      'name'          => 'Footer 2',
      'id'            => 'footer-widget-2',
      'before_widget' => '<div class="pb-5">',
      'after_widget'  => '</div>',
      'before_title'  => '<h6 class="footer-widget-title">',
      'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
      'name'          => 'Footer 3',
      'id'            => 'footer-widget-3',
      'before_widget' => '<div class="pb-5">',
      'after_widget'  => '</div>',
      'before_title'  => '<h6 class="footer-widget-title">',
      'after_title'   => '</h6>',
    ) );
}
  
add_action( 'widgets_init', 'arphabet_widget_init' );

?>