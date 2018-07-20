<?php get_header(); ?>
  <div id="results-intro">
    <div class="container">
      <h2 class="article-title"><?php the_field('first_section_title'); ?></h2>
      <?php the_field('first_section_content'); ?>
    </div>
    <span class="vertical-bar"></span>
  </div>

  <div id="services">
    <div class="container">
      <h2 class="article-title">How it Works</h2>

      <div class="row service">
        <div class="col-sm-7">
          <?php $section_1_image = get_field('how_it_works_section_1_image'); ?>
          <img src="<?php echo $section_1_image['url']; ?>" class="img-responsive center-block" alt="<?php echo $section_1_image['alt']; ?>" />
        </div>
        <div class="col-sm-5">
          <h3 id="search-inquiry" class="service-title"><?php the_field('how_it_works_section_1_title'); ?></h3>
          <?php the_field('how_it_works_section_1_content'); ?>
        </div>
      </div>

      <div class="row service">
        <div class="col-sm-7">
          <?php $section_2_image = get_field('how_it_works_section_2_image'); ?>
          <img src="<?php echo $section_2_image['url']; ?>" class="img-responsive center-block" alt="<?php echo $section_2_image['alt']; ?>" />
        </div>
        <div class="col-sm-5">
          <h3 id="review-plan" class="service-title"><?php the_field('how_it_works_section_2_title'); ?></h3>
          <?php the_field('how_it_works_section_2_content'); ?>
        </div>
      </div>

      <div class="row service">
        <div class="col-sm-7">
          <?php $section_3_image = get_field('how_it_works_section_3_image'); ?>
          <img src="<?php echo $section_3_image['url']; ?>" class="img-responsive center-block" alt="<?php echo $section_3_image['alt']; ?>" />
        </div>
        <div class="col-sm-5">
          <h3 id="customer-approval" class="service-title"><?php the_field('how_it_works_section_3_title'); ?></h3>
          <?php the_field('how_it_works_section_3_content'); ?>
        </div>
      </div>

      <div class="row service">
        <div class="col-sm-7">
          <?php $section_4_image = get_field('how_it_works_section_4_image'); ?>
          <img src="<?php echo $section_4_image['url']; ?>" class="img-responsive center-block" alt="<?php echo $section_4_image['alt']; ?>" />
        </div>
        <div class="col-sm-5">
          <h3 id="we-deliver" class="service-title"><?php the_field('how_it_works_section_4_title'); ?></h3>
          <?php the_field('how_it_works_section_4_content'); ?>
        </div>
      </div>

    </div>
  </div>

  <div id="get-started">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <h2 class="article-title">Get Started</h2>
          <?php the_field('get_started_section_content'); ?>
        </div>
        <div class="col-sm-3">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lightbulb.png" class="img-responsive center-block" alt="" style="margin-top:40px;" />
        </div>
      </div>
    </div>
  </div>

  <div class="cord-background alt"></div>

<?php get_footer(); ?>