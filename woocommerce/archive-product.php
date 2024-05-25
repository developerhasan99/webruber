<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( );

?>
<div class="archive_products">
	<div class="container">
		<div class="text-center pb-4">
			<h2>We Provide All Kind Of WordPress Services</h2>
			<p class="lead">
			Get world-class WordPress services from expert web developers.
			</p>
		</div>
		<?php
		if ( woocommerce_product_loop() ) {

			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'product' );
				}
			}

			woocommerce_product_loop_end();

			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action( 'woocommerce_after_shop_loop' );
		} else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action( 'woocommerce_no_products_found' );
		}?>
	</div>
</div>
<section class="home_care">
  <div class="container">
    <div class="text-center">
      <h2>Want a Custom Project?</h2>
      <p class="lead">
      Drop some line about your next project and we will give our best to reply as soon as possible.
      </p>
    </div>
    <div class="row pt-5">
    <div class="col-md-6 d-flex align-items-center">
        <img
          src="<?php echo get_template_directory_uri(); ?>/static/img/home-bg-1-img1.png"
          alt="WordPress Studio!"
          class="img-fluid"
          data-tilt
          data-tilt-glare
          data-tilt-scale="1.1"
          data-tilt-max-glare="0.8"
        />
      </div>
      <div class="col-md-6">
        <div class="contact_form_wrapper">
            <?php echo do_shortcode( ' [contact-form-7 id="106" title="Service page form"] ' ); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer( );
