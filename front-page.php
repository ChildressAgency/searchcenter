<?php get_header(); ?>

  <div class="background-element-wrapper">
    <div id="intro-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-lg-8">
            <article class="who-we-are">
              <h2 class="article-title"><?php the_field('first_section_title'); ?></h2>
              <?php the_field('first_section_content'); ?>
              <?php 
                $first_section_link = get_field('first_section_link');
                if($first_section_link): ?>
                  <a href="<?php echo $first_section_link['url']; ?>" class="btn-main"><?php echo $first_section_link['title']; ?></a>
              <?php endif; ?>
            </article>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-10 col-sm-offset-2 col-md-9 col-md-offset-3">
            <article class="our-promise">
              <h2 class="article-title"><?php the_field('second_section_title'); ?></h2>
              <?php 
                the_field('second_section_content');
                $second_section_link = get_field('second_section_link');
                if($second_section_link): ?>
                  <a href="<?php echo $second_section_link['url']; ?>" class="btn-main"><?php echo $second_section_link['title']; ?></a>
              <?php endif; ?>
            </article>
          </div>
        </div>
      </div>
      <span class="vertical-bar"></span>
    </div>

    <div id="how-it-works">
      <div class="container">
        <article>
          <h2 class="article-title"><?php the_field('how_it_works_section_title'); ?></h2>
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <section id="search-inquiry" class="process-card">
                <header style="background-image:url(<?php the_field('how_it_works_section_1_image'); ?>); <?php the_field('how_it_works_section_1_image_css'); ?>">
                  <h3><?php the_field('how_it_works_section_1_title'); ?></h3>
                  <span class="process-card-icon"></span>
                  <span class="overlay"></span>
                </header>
                <p><?php the_field('how_it_works_section_1_content'); ?></p>
              </section>
            </div>
            <div class="col-sm-6 col-md-3">
              <section id="review-plan" class="process-card">
                <header style="background-image:url(<?php the_field('how_it_works_section_2_image'); ?>); <?php the_field('how_it_works_section_2_image_css'); ?>">
                  <h3><?php the_field('how_it_works_section_2_title'); ?></h3>
                  <span class="process-card-icon"></span>
                  <span class="overlay"></span>
                </header>
                <p><?php the_field('how_it_works_section_2_content'); ?></p>
              </section>
            </div>
            <div class="col-sm-6 col-md-3">
              <section id="customer-approval" class="process-card">
                <header style="background-image:url(<?php the_field('how_it_works_section_3_image'); ?>); <?php the_field('how_it_works_section_3_image_css'); ?>">
                  <h3><?php the_field('how_it_works_section_3_title'); ?></h3>
                  <span class="process-card-icon"></span>
                  <span class="overlay"></span>
                </header>
                <p><?php the_field('how_it_works_section_3_content'); ?></p>
              </section>
            </div>
            <div class="col-sm-6 col-md-3">
              <section id="we-deliver" class="process-card">
                <header style="background-image:url(<?php the_field('how_it_works_section_4_image'); ?>); <?php the_field('how_it_works_section_4_image_css'); ?>">
                  <h3><?php the_field('how_it_works_section_4_title'); ?></h3>
                  <span class="process-card-icon"></span>
                  <span class="overlay"></span>
                </header>
                <p><?php the_field('how_it_works_section_4_content'); ?></p>
              </section>
            </div>
          </div>
          <!--<a href="<?php //echo home_url('services'); ?>" class="btn-main btn-alt">Learn More</a>-->
        </article>
      </div>
      <span class="vertical-bar"></span>
    </div>
    <span class="lightbulb-background"></span>
  </div>

  <div class="background-element-wrapper">
    <div id="testimonials-mission">
      <div class="container">
        <?php if(have_rows('testimonials')): ?>
          <article>
            <h2 class="testimonials-header article-title">What people are saying</h2>
            <div class="row">
              <div class="col-md-9 col-md-offset-3 testimonials" style="background-image:url(<?php the_field('testimonials_section_background_image'); ?>); <?php the_field('testimonials_section_background_image_css'); ?>">
                <?php while(have_rows('testimonials')): the_row(); ?>
                  <blockquote>
                    <?php the_sub_field('testimonial'); ?>
                    <footer><cite><?php the_sub_field('testimonial_author'); ?></cite></footer>
                  </blockquote>
                <?php endwhile; ?>
              </div>
            </div>
          </article>
        <?php endif; ?>

        <?php if(get_field('our_mission_content')): ?>
          <article>
            <div class="row">
              <div class="col-sm-9 col-sm-offset-3">
                <h2 class="article-title">Our Mission</h2>
                <?php the_field('our_mission_content'); ?>
              </div>
            </div>
          </article>
        <?php endif; ?>
      </div>
      <span class="vertical-bar"></span>
    </div>

    <div id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-sm-offset-3">
            <article>
              <h2 class="article-title">Contact Us</h2>
              <?php the_field('contact_section_content'); ?>
            </article>
          </div>
        </div>
      </div>
    </div>
    <span class="mouse-background"></span>
  </div>

<?php get_footer(); ?>