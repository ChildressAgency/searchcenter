<?php get_header(); ?>
  <div class="background-element-wrapper">
    <div id="who-we-are">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-2 col-md-9 col-md-offset-3">
            <article>
              <h2 class="article-title"><?php the_field('first_section_title'); ?></h2>
              <?php the_field('first_section_content'); ?>
            </article>
          </div>
        </div>
      </div>
      <span class="vertical-bar"></span>
    </div>
    <div id="what-we-provide">
      <div class="container">
        <h2 class="article-title">What We Provide</h2>
        <div class="row">
          <div class="col-sm-4">
            <div class="provide-card">
              <?php $section_1_image = get_field('what_we_provide_section_1_image'); ?>
              <img src="<?php echo $section_1_image['url']; ?>" class="img-responsive center-block" alt="<?php echo $section_1_image['alt']; ?>" />
              <h3><?php the_field('what_we_provide_section_1_title'); ?></h3>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="provide-card">
              <?php $section_2_image = get_field('what_we_provide_section_2_image'); ?>
              <img src="<?php echo $section_2_image['url']; ?>" class="img-responsive center-block" alt="<?php echo $section_2_image['alt']; ?>" />
              <h3><?php the_field('what_we_provide_section_2_title'); ?></h3>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="provide-card">
              <?php $section_3_image = get_field('what_we_provide_section_3_image'); ?>
              <img src="<?php echo $section_3_image['url']; ?>" class="img-responsive center-block" alt="<?php echo $section_3_image['alt']; ?>" />
              <h3><?php the_field('what_we_provide_section_3_title'); ?></h3>
            </div>
          </div>
        </div>
      </div>
      <span class="vertical-bar"></span>
    </div>
    <span class="lightbulb-background-2"></span>
  </div>

  <?php if(have_rows('our_team')): ?>
    <div id="our-team">
      <div class="container">
        <h2 class="article-title">Our Team</h2>
        <div class="row">
          <?php $i=0; while(have_rows('our_team')): the_row(); ?>
            <?php if($i%2==0){ echo '<div class="clearfix"></div>'; } ?>
            <div class="col-md-6">
              <div class="team-member">
                <div class="row">
                  <div class="col-sm-5">
                    <div class="team-member-photo">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-bulb-background.png" class="img-responsive center-block" alt="" />
                      <?php $team_member_image = get_sub_field('team_member_image'); ?>
                      <img src="<?php echo $team_member_image['url']; ?>" class="img-responsive img-circle center-block" alt="<?php echo $team_member_image['alt']; ?>" />
                    </div>
                  </div>
                  <div class="col-sm-7">
                    <div class="team-member-info">
                      <h3><?php the_sub_field('team_member_name'); ?></h3>
                      <h4><?php the_sub_field('team_member_title'); ?></h4>
                      <?php the_sub_field('team_member_bio'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

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
  <div class="cord-background"></div>

<?php get_footer(); ?>