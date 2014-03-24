<?php get_header(); ?>

  <div class="grid_7">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="entry">
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
  <div class="grid_5">
    &nbsp;
  </div>

<?php get_footer(); ?>
