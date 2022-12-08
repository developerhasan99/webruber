<?php /* Template Name: Signup Page Template */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet" />
    <?php wp_head(  ); ?>
</head>

<body>
    <div class="login_page_wrapper">
        <div class="login_page_inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/log-in.png" alt=""
                            class="img-fluid d-sm-none" data-tilt data-tilt-scale="1.1" />
                    </div>
                    <div class="col-sm-6">
                        <div class="text-center mb-3">
                            <a class="login_logo_link my-3" href="<?php echo esc_url( home_url( ) ); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/logo.png" width="35" height="35"
                                    alt="W">
                                <h4 class="d-inline align-middle mb-0">ebruber</h4>
                            </a>
                            <h1 class="loginpage_title">Create your Webruber Account!</h1>
                        </div>
                        <?php do_action( 'woocommerce_before_customer_login_form' ); ?>
                        <form method="post" class="woocommerce-form woocommerce-form-register register" <?php
                            do_action( 'woocommerce_register_form_tag' ); ?> >

                            <?php do_action( 'woocommerce_register_form_start' ); ?>

                            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="reg_username">
                                    <?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span
                                        class="required">*</span>
                                </label>
                                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                                    name="username" id="reg_username" autocomplete="username"
                                    value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" />
                                <?php // @codingStandardsIgnoreLine ?>
                            </p>

                            <?php endif; ?>

                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="reg_email">
                                    <?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span
                                        class="required">*</span>
                                </label>
                                <input type="email" class="woocommerce-Input woocommerce-Input--text input-text"
                                    name="email" id="reg_email" autocomplete="email"
                                    value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" />
                                <?php // @codingStandardsIgnoreLine ?>
                            </p>

                            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="reg_password">
                                    <?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span
                                        class="required">*</span>
                                </label>
                                <input type="password" class="woocommerce-Input woocommerce-Input--text input-text"
                                    name="password" id="reg_password" autocomplete="new-password" />
                            </p>

                            <?php else : ?>

                            <p>
                                <?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?>
                            </p>

                            <?php endif; ?>

                            <?php do_action( 'woocommerce_register_form' ); ?>

                            <p class="woocommerce-form-row form-row">
                                <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                                <button type="submit"
                                    class="btn btn-primary btn-block woocommerce-Button woocommerce-button button woocommerce-form-register__submit"
                                    name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>">
                                    <?php esc_html_e( 'Register', 'woocommerce' ); ?>
                                </button>
                            </p>
                            <p><a href="<?php echo esc_url( home_url( '/login/' ) ); ?>">Alrady member? login!</a></p>

                            <?php do_action( 'woocommerce_register_form_end' ); ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer( ) ?>
</body>

</html>