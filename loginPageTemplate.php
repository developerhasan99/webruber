<?php /* Template Name: Login Page Template */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,700&display=swap"
      rel="stylesheet"
    />
    <?php wp_head(  ); ?>
  </head>
  <body>
    <div class="login_page_wrapper">
      <div class="login_page_inner">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 d-flex align-items-center">
              <img
                src="<?php echo get_template_directory_uri(); ?>/static/img/log-in.png"
                alt=""
                class="img-fluid d-sm-none"
                data-tilt
                data-tilt-scale="1.1"
              />
            </div>
            <div class="col-sm-6">
              <div class="text-center mb-4 mt-2">
                <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                  the_custom_logo();
                }
                ?>
                <h1 class="loginpage_title mt-3">Welcome to Webruber!</h1>
              </div>
              <?php do_action( 'woocommerce_before_customer_login_form' ); ?>
              <form class="login" method="post">
                <?php do_action( 'woocommerce_login_form_start' ); ?>

                <p>
                  <label for="username"
                    ><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span
                      class="required"
                      >*</span
                    ></label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="username"
                    id="username"
                    autocomplete="username"
                    value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"
                  /><?php // @codingStandardsIgnoreLine ?>
                </p>
                <p>
                  <label for="password"
                    ><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span
                      class="required"
                      >*</span
                    ></label
                  >
                  <input
                    class="form-control"
                    type="password"
                    name="password"
                    id="password"
                    autocomplete="current-password"
                  />
                </p>

                <?php do_action( 'woocommerce_login_form' ); ?>

                <p class="form-row">
                  <label class="d-block mb-3">
                    <input
                      class="woocommerce-form-checkbox"
                      name="rememberme"
                      type="checkbox"
                      id="rememberme"
                      value="forever"
                    />
                    <span
                      ><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span
                    >
                  </label>
                  <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                  <button
                    type="submit"
                    class="btn btn-primary btn-block"
                    name="login"
                    value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"
                  >
                    <?php esc_html_e( 'Log in', 'woocommerce' ); ?>
                  </button>
                </p>
                <p class="mb-2">
                  <a
                    class="lost-password-link"
                    href="<?php echo esc_url( wp_lostpassword_url() ); ?>"
                    ><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a
                  >
                </p>
                <p class="mb-2">Or</p>
                <p><a href="<?php echo esc_url( home_url( '/signup/' ) ); ?>">Create an account!</a></p>
                <?php do_action( 'woocommerce_login_form_end' ); ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php wp_footer( ) ?>
  </body>
</html>
