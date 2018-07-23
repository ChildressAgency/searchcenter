<?php get_header(); ?>
  <?php 
    $first_article = new WP_Query(array(
      'post_type' => 'article',
      'posts_per_page' => 1,
      'post_status' => 'publish'
    ));
    if($first_article->have_posts()): ?>

      <div id="articles">
        <div class="container">
          <h2 class="article-title">Articles</h2>
          <?php while($first_article->have_posts()): $first_article->the_post(); ?>
            <div class="article-card">
              <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true); ?>
              <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $featured_image[0]; ?>);"></a>
              <h3><?php the_title(); ?></h3>
            </div>
          <?php endwhile; ?>
          <?php 
            $other_articles = new WP_Query(array(
              'post_type' => 'article',
              'posts_per_page' => 2,
              'offset' => 1,
              'post_status' => 'publish'
            ));
            if($other_articles->have_posts()): ?>
              <div class="row">
                <?php while($other_articles->have_posts()): $other_articles->the_post(); ?>
                  <div class="col-sm-6">
                    <div class="article-card">
                      <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true); ?>
                      <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $featured_image[0]; ?>);"></a>
                      <h3><?php the_title(); ?></h3>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>
          <?php endif; wp_reset_postdata(); ?>

          <a href="<?php echo get_post_type_archive_link('article'); ?>" class="btn-main pull-right">All Articles</a>
        </div>
        <span class="vertical-bar"></span>
      </div>

  <?php endif; wp_reset_postdata(); ?>

  <?php
    $recent_webinars = new WP_Query(array(
      'post_type' => 'webinar',
      'posts_per_page' => 3,
      'post_status' => 'publish'
    ));
    if($recent_webinars->have_posts()): ?>
      <div id="webinars">
        <div class="container">
          <h2 class="article-title">Webinars</h2>
          <div class="row">
            <?php while($recent_webinars->have_posts()): $recent_webinars->the_post(); ?>
              <div class="col-sm-4">
                <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true); ?>
                <div class="webinar-card" style="background-image:url(<?php echo $featured_image[0]; ?>);">
                  <h3><?php the_title(); ?></h3>
                  <a href="<?php the_permalink(); ?>" class="btn-main btn-clear">Watch</a>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
          <a href="<?php echo get_post_type_archive_link('webinar'); ?>" class="btn-main btn-alt pull-right">View All</a>
        </div>
        <span class="vertical-bar"></span>
      </div>
  <?php endif; wp_reset_postdata(); ?>

  <?php 
    $recent_whitepapers = new WP_Query(array(
      'post_type' => 'whitepaper',
      'posts_per_page' => 3,
      'post_status' => 'publish'
    ));
    if($recent_whitepapers->have_posts()): ?>
      <div id="white-papers">
        <div class="container">
          <h2 class="article-title">White Papers</h2>
          <?php while($recent_whitepapers->have_posts()): $recent_whitepapers->the_post(); ?>
            <div class="row white-paper-summary">
              <div class="col-sm-5">
                <?php the_post_thumbnail('full', array('class' => 'img-responsive center-block', 'alt' => '')); ?>
              </div>
              <div class="col-sm-7">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn-main pull-right">Get the Paper</a>
              </div>
            </div>
          <?php endwhile; ?>
          <a href="<?php echo get_post_type_archive_link('whitepaper'); ?>" class="btn-main non-btn">View All</a>
        </div>
        <span class="vertical-bar"></span>
      </div>
  <?php endif; wp_reset_postdata(); ?>

  <?php 
    $recent_posts = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => 3,
      'post_status' => 'publish'
    ));
    if($recent_posts->have_posts()): ?>
      <div id="blog">
        <div class="container">
          <h2 class="article-title">Blog</h2>
          <?php while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
            <div class="row blog-summary">
              <div class="col-sm-5">
                <?php the_post_thumbnail('full', array('class' => 'img-responsive center-block', 'alt' => '')); ?>
              </div>
              <div class="col-sm-7">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn-main btn-alt pull-right">Read More</a>
              </div>
            </div>
          <?php endwhile; ?>
          <a href="<?php echo get_post_type_archive_link('post'); ?>" class="btn-main non-btn-alt">View All</a>
        </div>
      </div>
  <?php endif; wp_reset_postdata(); ?>

  <div class="cord-background"></div>

<?php get_footer(); ?>