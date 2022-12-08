    <section class="footer_lebel pt-3">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-3 col-6 pb-2">
            <div class="footer_lebel_item">
              <img
                class="footer_lebel_img"
                src="<?php echo get_template_directory_uri(); ?>/static/img/premium-quality.svg"
                alt="Premium Quality"
              />
              <h5>Premium Quality</h5>
            </div>
          </div>
          <div class="col-md-3 col-6 pb-2">
            <div class="footer_lebel_item">
              <img
                class="footer_lebel_img"
                src="<?php echo get_template_directory_uri(); ?>/static/img/budget-friendly.svg"
                alt="Budget Friendly"
              />
              <h5>Budget Friendly</h5>
            </div>
          </div>
          <div class="col-md-3 col-6 pb-2">
            <div class="footer_lebel_item">
              <img
                class="footer_lebel_img"
                src="<?php echo get_template_directory_uri(); ?>/static/img/support.svg"
                alt="Premium Support"
              />
              <h5>24/7 Support</h5>
            </div>
          </div>
          <div class="col-md-3 col-6 pb-2">
            <div class="footer_lebel_item">
              <img
                class="footer_lebel_img"
                src="<?php echo get_template_directory_uri(); ?>/static/img/money-back.svg"
                alt="Refund Guarantee"
              />
              <h5>Refund Guarantee</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer_col_1">
                <?php dynamic_sidebar( 'footer-widget-1' ); ?>
            </div>
            <div class="footer_col_2">
                <?php dynamic_sidebar( 'footer-widget-2' ); ?>
            </div>
            <div class="footer_col_3">
                <?php dynamic_sidebar( 'footer-widget-3' ); ?>
            </div>
            <div class="footer_col_4">
                <h6 class="footer_widget_title">Follow us</h6>
                <ul class="social_network_list">
                    <li>
                        <a class="facebook_social_link btn" href="https://web.facebook.com/laptopFasterPlc" rel="nofollow noreferrer"></a>
                    </li>
                    <li>
                        <a class="twitter_social_link btn" href="https://twitter.com/laptopfaster" rel="nofollow noreferrer"></a>
                    </li>
                    <li>
                        <a class="instagarm_social_link btn" href="https://www.instagram.com/laptopfaster" rel="nofollow noreferrer"></a>
                    </li>
                    <li>
                        <a class="linkedin_social_link btn" href="https://linkedin.com/in/laptop-faster" rel="nofollow noreferrer"></a>
                    </li>
                </ul>
                <h6 class="footer_widget_title">We Accept</h6>
                <p class="mb-4"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/static/img/credit-cards.png" alt="Credit Cards"></p>
                <p class="copyright_text">&copy; <?php echo copydate(); ?> <strong><?php bloginfo(); ?></strong> - All Rights Reserved.</p>
            </div>
        </div>
    </div>
    </footer>
    <?php wp_footer( ) ?>
</body>

</html>