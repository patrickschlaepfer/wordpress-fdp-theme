<?php get_header(); ?>
  <div class="grid_12">
    <?php echo do_shortcode('[bannerspace]'); ?>
  </div>


  <div class="grid_7">
    <?php query_posts('category_name=Frontpage'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="entry">
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?> 
  </div>
  <div class="grid_5">
    <?php get_sidebar(); ?>
  </div><!-- main -->

<?php get_footer(); ?>

