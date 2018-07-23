  <footer id="footer">
    <div class="container container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-6 col-sm-height divider">
          <h3>Browse Our Site</h3>
          <nav id="footer-nav">
            <?php
              $footer_nav_args = array(
                'theme_location' => 'footer-nav',
                'menu' => '',
                'container' => '',
                'container_id' => '',
                'container_class' => '',
                'menu_class' => 'list-unstyled list-inline',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'searchcenter_footer_fallback_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 2
              );
              wp_nav_menu($footer_nav_args);
            ?>
          </nav>
        </div>
        <div class="col-sm-6 col-sm-height">
          <h3><?php the_field('company_name', 'option'); ?></h3>
          <div class="row">
            <div class="col-lg-6">
              <div class="contact-info">
                <p><?php the_field('phone_number', 'option'); ?></p>
                <p><?php the_field('email', 'option'); ?></p>
                <p><a href="<?php echo home_url('privacy-policy'); ?>">privacy policy</a></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="social">
                <?php if(get_field('facebook', 'option')): ?>
                  <a href="<?php the_field('facebook', 'option'); ?>" class="facebook text-hide">Facebook<i class="fab fa-facebook fa-5x"></i></a>
                <?php endif; if(get_field('twitter', 'option')): ?>
                  <a href="<?php the_field('twitter', 'option'); ?>" class="twitter text-hide">Twitter<i class="fab fa-twitter fa-5x"></i></a>
                <?php endif; if(get_field('linkedin', 'option')): ?>
                  <a href="<?php the_field('linkedin', 'option'); ?>" class="linkedin text-hide">LinkedIn<i class="fab fa-linkedin-in fa-5x"></i></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="copyright">
      <span>&copy; <?php the_field('company_name', 'option'); ?> <?php echo date('Y'); ?></span>&nbsp;|&nbsp;
      <span>Website created by the <a href="https://childressagency.com" target="_blank">Childress Agency</a></span>
    </p>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>