<?php get_header(); ?>
<div class="container">
  <article>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <h2 class="article-title"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    <?php endwhile; else: ?>
      <p>Sorry, that page could not be found.</p>
    <?php endif; ?>
  </article>
</div>
<?php get_footer(); ?>