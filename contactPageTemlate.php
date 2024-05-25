<?php /* Template Name: Contact Page Template */ ?>
<?php get_header( ); ?>
<section class="home_hero">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex align-items-center">
        <div class="d-block mb-md-5">
          <h1>Interested in working together?</h1>
          <p class="lead">
          Need assistance with your WordPress website? Have a question about billing? Don’t hesitate to reach out. 
          </p>
          <p class="lead">
          We take a cooperative team approach to fielding all inquiries.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <img
          src="<?php echo get_template_directory_uri(); ?>/static/img/contact-us-1.png"
          alt="WordPress Studio!"
          class="img-fluid"
          data-tilt
          data-tilt-glare
          data-tilt-scale="1.1"
          data-tilt-max-glare="0.8"
        />
      </div>
    </div>
  </div>
</section>
<section class="home_care">
  <div class="container">
    <div class="text-center">
      <h2>Get In Touch</h2>
      <p class="lead">
      Drop some line and we will give our best to reply as soon as possible.
      </p>
    </div>
    <div class="row pt-5">
    <div class="col-md-6 d-flex align-items-center">
        <img
          src="<?php echo get_template_directory_uri(); ?>/static/img/contact-us-2.png"
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
            <?php echo do_shortcode( ' [contact-form-7 id="103" title="Contact page form"] ' ); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer( ) ?>
