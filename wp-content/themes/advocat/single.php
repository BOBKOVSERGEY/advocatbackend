<?php get_header(); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
  <article class="article">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </article>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>