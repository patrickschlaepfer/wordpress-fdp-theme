<?php get_header(); ?>

  <div class="grid_7">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      <div id="meta">
        erstellt am: <?php the_date('d.m.Y'); ?> |
        von: <?php the_author(); ?> |
        Kategorie(n): <?php the_category(', '); ?></p>
      </div>
      <div class="entry">
        <?php the_content(); ?>
      </div>
                   
     <?php endwhile; endif; ?>
                    
     <?php comment_form(array('title_reply'=>'Kommentar')); ?>
  </div>
  <div class="grid_5">
    &nbsp;
  </div>

<?php get_footer(); ?>
