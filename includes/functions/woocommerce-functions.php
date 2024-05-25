<?php 

add_theme_support( 'woocommerce' );

// Remove woocommerce Default CSS
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Disable WooCommerce block styles (front-end).
 */
function slug_disable_woocommerce_block_styles() {
   wp_dequeue_style( 'wc-block-style' );
 }
 add_action( 'wp_enqueue_scripts', 'slug_disable_woocommerce_block_styles' );

// // -------------
// // 1. Show plus minus buttons
  
// add_action( 'woocommerce_after_quantity_input_field', 'ruber_display_quantity_plus' );
  
// function ruber_display_quantity_plus() {
//    if ( is_product() ) { 
//       echo '<button type="button" class="plus" >+</button>';
//    }
// }
  
// add_action( 'woocommerce_before_quantity_input_field', 'ruber_display_quantity_minus' );
  
// function ruber_display_quantity_minus() {
//    if ( is_product() ) { 
//       echo '<button type="button" class="minus" >-</button>';
//    }
// }
  
// // -------------
// // 2. Trigger update quantity script
  
// add_action( 'wp_footer', 'ruber_add_cart_quantity_plus_minus' );
  
// function ruber_add_cart_quantity_plus_minus() {
 
//    if ( ! is_product() ) return;
    
//    wc_enqueue_js( "   
           
//       $('form.cart,form.woocommerce-cart-form').on( 'click', 'button.plus, button.minus', function() {
  
//          var qty = $( this ).parent( '.quantity' ).find( '.qty' );
//          var val = parseFloat(qty.val());
//          var max = parseFloat(qty.attr( 'max' ));
//          var min = parseFloat(qty.attr( 'min' ));
//          var step = parseFloat(qty.attr( 'step' ));
 
//          if ( $( this ).is( '.plus' ) ) {
//             if ( max && ( max <= val ) ) {
//                qty.val( max );
//             } else {
//                qty.val( val + step );
//             }
//          } else {
//             if ( min && ( min >= val ) ) {
//                qty.val( min );
//             } else if ( val > 1 ) {
//                qty.val( val - step );
//             }
//          }
 
//       });
        
//    " );
// }

// Add to cart button label for archive products

add_filter( 'add_to_cart_text', 'woo_custom_product_add_to_cart_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text' );
  
function woo_custom_product_add_to_cart_text() {
  
    return __( esc_html__( '', 'ruber' ), 'woocommerce' );
  
}

//Woocommerce Add to cart Fragments
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
  global $woocommerce;

  ob_start();

  ?>
  <span class="cart_items_count"> <?php echo WC()->cart->get_cart_contents_count(); ?></span>
  <?php
  $fragments['span.cart_items_count'] = ob_get_clean();
  return $fragments;
}

/* WooCommerce: The Code Below Removes Checkout Fields */
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
	unset($fields['billing']['billing_country']);
	return $fields;
}

// Redirect Users After Registration
add_filter( 'woocommerce_registration_redirect', 'custom_redirection_after_registration', 10, 1 );
function custom_redirection_after_registration( $redirection_url ){
    // Change the redirection Url
    $redirection_url = wc_get_page_permalink( 'myaccount' ); // Home page

    return $redirection_url; // Always return something
}

add_filter( 'registration_redirect', 'webruber_registration_redirect' );

// Redirect Users After Login
add_filter('woocommerce_login_redirect', 'wc_login_redirect'); 

function wc_login_redirect( $redirect_to ) {

   $redirect_to = wc_get_page_permalink( 'myaccount' );
   return $redirect_to;

}

// Redirect Users After Logout
add_action('wp_logout','auto_redirect_after_logout');

function auto_redirect_after_logout(){

  wp_redirect( home_url('/login/') );
  exit();

}


//Fix brocken Products table
add_action('admin_head', 'add_admin_css');
function add_admin_css() {
echo '<style>
  .post-type-product div.wrap {width:96.6%;}
  .post-type-product table.wp-list-table.fixed{table-layout:auto;}
  .post-type-product table.wp-list-table th#title{min-width:350px;}
  .post-type-product table.wp-list-table th#categories{min-width:150px;}
  </style>';
}

?>