<?php get_header(); ?>
  <div id="get-started">
    <div class="contact-info">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h2 class="article-title">Contact Us</h2>
            <div class="row">
              <div class="col-sm-5">
                <div class="contact-card">
                  <h3>Address</h3>
                  <p><?php the_field('company_name', 'option'); ?><br /><?php the_field('street_address', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="contact-card">
                  <h3>Phone</h3>
                  <p><?php the_field('phone_number', 'option'); ?></p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="contact-card">
                  <h3>Email</h3>
                  <p><?php the_field('email', 'option'); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lightbulb-circle.png" class="img-responsive center-block" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="contact-form-section">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
          </div>
        </div>
      </div>
    </div>
    <span class="vertical-bar"></span>
  </div>

  <div id="location-map">
    <div class="container location-info">
      <h2 class="article-title">Location</h2>
      <?php the_field('location_section_content'); ?>
    </div>
    <div class="container-fluid">
      <div class="embed-responsive embed-responsive-16by9">
        <?php
          $map_iframe = get_field('google_map_iframe');
          $map_iframe = str_replace('allowfullscreen>', 'allowfullscreen class="embed-responsive-item">', $map_iframe);
          echo $map_iframe;
        ?>
      </div>
    </div>
  </div>

  <div class="cord-background alt"></div>

<?php get_footer(); ?>