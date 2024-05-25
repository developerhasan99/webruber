<?php /* Template Name: About Page Template */ ?>
<?php get_header( ); ?>
<section class="home_hero">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex align-items-center">
        <div class="d-block mb-md-5">
          <h1>We are in Webruber</h1>
          <p class="lead">
          Webruber exists to solve diverse WordPress problems at an affordable price.  We (at Wevruber) are a team of WordPress experts and content creators.
          </p>
          <p class="lead">
          We are passionate about solving challenges and supporting people who use WordPress! We work 100% remotely from every time zone.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <img
          src="<?php echo get_template_directory_uri(); ?>/static/img/about-us-1.png"
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
    <div class="row">
      <div class="col-md-6">
        <img
          src="<?php echo get_template_directory_uri(); ?>/static/img/about-us-2.jpg"
          alt="WordPress Care"
          class="img-fluid mb-md-5"
          data-tilt
          data-tilt-glare
          data-tilt-scale="1.1"
          data-tilt-max-glare="0.8"
        />
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div class="d-block">
          <h2>Our Mission and Vision</h2>
          <p class="lead">
          Our mission is to create WordPress websites more user-friendly and profitable. To achieve this, we provide all kinds of WordPress services, including installation, customization, and optimization.
          </p>
          <p class="lead mb-0">
          We always try to create unforgettable user experiences that positively impact every community we connect with.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home_service">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex align-items-center">
        <div class="d-block mb-md-5">
          <h1>What We Do</h1>
          <p class="lead">
          We make WordPress websites as better as possible. We at webruber audit, fix, optimize and develop a WordPress website. Our team tries to give our customers maximum effort.
          </p>
          <p class="lead">
          At last, we allow you to make bold decisions when it comes to your website without hesitating due to technical restraints.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <img
          src="<?php echo get_template_directory_uri(); ?>/static/img/about-us-3.png"
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
    <div class="row">
      <div class="col-md-6">
        <img
          src="<?php echo get_template_directory_uri(); ?>/static/img/about-us-4.png"
          alt="WordPress Care"
          class="img-fluid mb-md-5"
          data-tilt
          data-tilt-glare
          data-tilt-scale="1.1"
          data-tilt-max-glare="0.8"
        />
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div class="d-block">
          <h2>Interested in working together?</h2>
          <p class="lead">
          Need assistance with your WordPress website? Have a question about billing? Don’t hesitate to reach out. 
          </p>
          <p class="lead">
          We take a cooperative team approach to fielding all inquiries.
          </p>
          <a class="btn btn-primary" href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>">Get a Quote!</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer( ) ?>
