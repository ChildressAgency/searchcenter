<?php get_header(); ?>
<div id="white-papers">
  <div class="container">
    <?php
      //$queried_object = get_queried_object();
      //$post_type_name = $queried_object->labels->name;
    ?>
    <h2 class="article-title"><?php //echo $post_type_name; ?></h2>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div class="row white-paper-summary">
        <div class="col-sm-5">
          <?php the_post_thumbnail('full', array('class' => 'img-responsive center-block', 'alt' => '')); ?>
        </div>
        <div class="col-sm-7">
          <h3><?php the_title(); ?></h3>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="btn-main pull-right">Read More</a>
        </div>
      </div>
    <?php endwhile; endif; wp_pagenavi(); ?>
  </div>
</div>
<?php get_footer(); ?>