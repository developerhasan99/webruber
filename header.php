<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,700&display=swap"
      rel="stylesheet"
    />
    <?php wp_head(  ); ?>
  </head>
  <body <?php body_class(  ); ?>>
  <?php wp_body_open(  ); ?>
    <header class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand mr-auto" href="<?php echo esc_url( home_url( ) ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/logo.png" width="35" height="35" alt="W">
          <h4 class="d-inline align-middle mb-0">ebruber</h4>
        </a>
        <div class="nav_menu_wrapper">
          <div class="mobile_nav_closer_btn_wrapper">
            <button class="mobile_nav_closer_btn btn"></button>
          </div>
          <?php wp_nav_menu( array( 'theme_location'=>'top-menu' ) ) ?>
        </div>
        <ul class="nav_icon_list">
          <li>
            <?php if (!is_user_logged_in()) {?>
              <a href="<?php echo esc_url( home_url( '/login/' ) ); ?>" class="nav_user_link btn"></a>
            <?php } else {?>
              <a href="<?php echo wc_get_page_permalink( 'myaccount' ); ?>" class="nav_account_link btn"><?php global $current_user; echo get_avatar( $current_user->ID, 30 ); ?></a>
            <?php } ?>
          </li>
          <li>
            <a class="nav_cart_link btn" href="<?php echo wc_get_cart_url(); ?>">
              <span class="cart_items_count"> 
                <?php echo WC()->cart->get_cart_contents_count(); ?>
              </span>
            </a>
          </li>
          <li><button class="nav_search_toggler btn"></button></li>
        </ul>
        <div class="nav_searchform_wrapper">
          <?php get_search_form(); ?>
        </div>
        <button class="nav_menu_toggler btn"></button>
      </div>
    </header>