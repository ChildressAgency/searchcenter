<?php get_header(); ?>
<?php if(get_field('first_section_title') || get_field('first_section_content')): ?>
  <div id="results-intro">
    <div class="container">
      <h2 class="article-title"><?php the_field('first_section_title'); ?></h2>
      <?php the_field('first_section_content'); ?>
    </div>
    <span class="vertical-bar"></span>
  </div>
<?php endif; ?>

  <div id="services">
    <div class="container">
      <!--<h2 class="article-title">Search Products</h2>-->

      <?php if(have_rows('how_it_works_sections')): while(have_rows('how_it_works_sections')): the_row(); ?>
        <div class="row service">
          <div class="col-sm-7">
            <?php $section_image = get_sub_field('section_image'); ?>
            <img src="<?php echo $section_image['url']; ?>" class="img-responsive center-block" alt="<?php echo $section_image['alt']; ?>" />
          </div>
          <div class="col-sm-5">
            <?php if(get_sub_field('section_icon')): ?>
              <img src="<?php the_sub_field('section_icon'); ?>" class="service-icon" alt="" />
            <?php endif; ?>
            <h3 class="service-title"><?php the_sub_field('section_title'); ?></h3>
            <?php the_sub_field('section_content'); ?>
          </div>
        </div>
      <?php endwhile; endif; ?>

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