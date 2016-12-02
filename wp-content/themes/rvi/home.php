<?php get_header(); ?>
<div id="home-wrapper">
  <div class="wrapper-main">

  <div id="flexi-slider">
    <ul>
      <?php $archit = get_template_directory_uri() . '/images/architectual-solutions-hero-slider.jpg' ?>
      <li class="fadeIn">
        <div class="descrp">
          <h2>Architectural Solutions</h2>
        </div>
        <a href="http://www.rvi-group.com/architectural-solutions/"><img src="<?php echo esc_attr( $archit ); ?>" alt="Architectural Solutions"></a>
      </li>

      <?php $engineered = get_template_directory_uri() . '/images/engineered-vent-hero-slider.jpg' ?>
      <li class="hide fadeIn">
        <div class="descrp">
          <h2>Engineered Ventilation</h2>
        </div>
        <a href="http://www.rvi-group.com/engineered-ventilation/"><img src="<?php echo esc_attr( $engineered ); ?>" alt="Engineered Ventilation"></a>
      </li>

      <?php $smokeVent = get_template_directory_uri() . '/images/rvi-group-smoke-ventilation-SV-Atrium-on-5th-Sandton-2.jpg' ?>
      <li class="hide fadeIn">
        <div class="descrp">
          <h2>Smoke Ventilation</h2>
        </div>
        <a href="http://www.rvi-group.com/smoke-ventilation/"><img src="<?php echo esc_attr( $smokeVent ); ?>" alt="Smoke Ventilation"></a>
      </li>

      <?php $servicesMaintenance = get_template_directory_uri() . '/images/services-maintenance-slider.jpg' ?>
      <li class="hide fadeIn">
        <div class="descrp">
          <h2>Services & Maintenance</h2>
        </div>
        <a href="http://www.rvi-group.com/service-maintenance/"><img src="<?php echo esc_attr( $servicesMaintenance ); ?>" alt="Services & Maintenance"></a>
      </li>
    </ul>
  </div>

  <div style="width: 100%; display: block;"></div>
  <br clear="all">
  <?php if (get_option('simplepress_quote') == 'on' && get_option('simplepress_blog_style') == 'false') { ?>

    <div class="container">

      <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="http://rvi-group.com/architectural-solutions/">
          <img src="http://rvi-group.com/wp-content/uploads/2016/05/architectual-solutions.png" alt="Architectual Solutions" class="theImg img-responsive img-center">
        </a>
        <br>
        <h4 class="services-offered">Architectural Solutions</h4>
        <p class="services-offered">
          The Architectural Solutions division of RVI supplies bespoke aesthetic thermal and light control facade...
        </p>
        <br>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="http://rvi-group.com/engineered-ventialtion/"><img src="http://rvi-group.com/wp-content/uploads/2016/05/engineered-ventilation.png" alt="Engineered Ventilation" class="theImg img-responsive img-center"></a>
        <br>
        <h4 class="services-offered">Engineered Ventilation</h4>
        <p class="services-offered">
          RVI Engineered Ventilation designs and develops ventilation systems to handle all heat-loaded levels...
        </p>
        <br>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="http://rvi-group.com/smoke-ventilation/">
          <img src="http://rvi-group.com/wp-content/uploads/2016/05/smoke-ventilation.png" alt="Smoke Ventilation" class="theImg img-responsive img-center">
        </a>
        <br>
        <h4 class="services-offered">Smoke Ventilation</h4>
        <p class="services-offered">
          RVI has always been a solutions-led company and is well-positioned at the forefront of industrial...
        </p>
        <br>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="http://rvi-group.com/services-maintenance/">
          <img src="http://rvi-group.com/wp-content/uploads/2016/05/services-main.png" alt="Service & Maintenance<" class="theImg img-responsive img-center">
        </a>
        <br>
        <h4 class="services-offered">Service & Maintenance</h4>
        <p class="services-offered">
          Fire, the visible effect of the process of combustion, can lead to the destruction of building within minutes...
        </p>
        <br>
      </div>

      <br clear="all">

    </div>
  </div>
</div>
<div class="blurb-wrapper">
    <div id="blurbs">
      <div class="col-xs-12 col-sm-12 col-md-4 footer-center-text">
        <h3>About Us</h3>
        <br>
        <p>Robertson Ventilation Industries [RVI] founded in 2005 is a legacy holding company, which has a lineage dating back to 1918.</p>
        <a class="home-more-link" href="http://rvi-group.com/who-we-are/">Read More</a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 footer-center-text">
        <h3>Our Services</h3>
        <br>
        <ul>
          <li><a href="http://rvi-group.com/architectural-solutions/">Architectural Solutions</a></li>
          <li><a href="http://rvi-group.com/engineered-ventialtion/">Engineered Ventilation</a></li>
          <li><a href="http://rvi-group.com/smoke-ventilation/">Smoke Ventilation</a></li>
          <li><a href="http://rvi-group.com/services-maintenance/">Service & Maintenance</a></li>
        </ul>
        <a class="home-more-link" href="http://rvi-group.com/what-we-do/">Read More</a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 footer-center-text">
        <h3>Contact Us</h3>
        <br>
        <p><strong>Tel:</strong> +27 (0) 11 608 4640</p>
        <p><strong>Email:</strong> <a href="info@rvi-group.com">info@rvi-group.com</a></p>
        <a class="home-more-link" href="http://rvi-group.com/contact-us/">Read More</a>
      </div>
      <br class="clear" />
    </div>
</div>
<?php }; ?>
<?php get_footer(); ?>