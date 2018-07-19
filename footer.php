  <footer id="footer">
    <div class="container container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-6 col-sm-height divider">
          <h3>Browse Our Site</h3>
          <nav id="footer-nav">
            <ul class="list-unstyled list-inline">
              <li>
                <a href="#">About</a>
                <ul class="list-unstyled footer-sub-nav">
                  <li><a href="#">Staff</a></li>
                  <li><a href="#">Our Mission</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Services</a>
                <ul class="list-unstyled footer-sub-nav">
                  <li><a href="#">IP Services</a></li>
                  <li><a href="#">Patent</a></li>
                  <li><a href="#">Trademark</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Resources</a>
                <ul class="list-unstyled footer-sub-nav">
                  <li><a href="#">Articles</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">White Paper</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Contact</a>
                <ul class="list-unstyled footer-sub-nav">
                  <li><a href="#">Our Location</a></li>
                  <li><a href="#">Existing Customers</a></li>
                  <li><a href="#">New Customers</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-sm-6 col-sm-height">
          <h3>Search-Center</h3>
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
      <span>&copy; Search-Center <?php echo date('Y'); ?></span>&nbsp;|&nbsp;
      <span>Website created by the <a href="https://childressagency.com" target="_blank">Childress Agency</a></span>
    </p>
  </footer>
</body>

</html>