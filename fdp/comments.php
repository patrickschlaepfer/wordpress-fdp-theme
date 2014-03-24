<div id="kommentar_formular">
 
<h3 id="respond">Kommentar schreiben</h3>
 
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
 
   <p>
      <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" />
      <label for="author">Name</label>
   </p>
 
   <p>
      <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
      <label for="email">Email <small>(wird nicht ver&ouml;ffentlicht)</small></label>
   </p>
 
   <p>
      <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
      <label for="url">Webseite</label>
   </p>
 
   <p>
      Kommentar
      <textarea name="comment" id="comment" style="width: 100%;" rows="10" tabindex="4"></textarea>
   </p>

   <?php
       $captcha_instance = new ReallySimpleCaptcha();
       // Change the background color of CAPTCHA image to black
       $captcha_instance->bg = array(0, 0, 0);
       
       $word = $captcha_instance->generate_random_word();
       
       $prefix = mt_rand();
       $captcha_instance->generate_image($prefix, $word);

   ?>
 
   <p>
      <input name="submit" type="submit" id="submit" tabindex="5" value="Kommentar abschicken" />
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
   </p>
 
   <?php do_action('comment_form', $post->ID); ?>
 
</form>
 
</div> <!-- kommentar_formular -->

<div id="kommentare">

  <?php if (have_comments() ) : ?>
  <h4 id="comments"><?php comments_number('No comments', 'One Comment', '% Comments') ?></h4>
  <ul class="commentlist">
    <?php wp_list_comments(); ?>
  </ul>
  <div class="navigation">
    <div class="alignleft"><?php previous_comments_link() ?></div>
    <div class="alignright"><?php next_comments_link() ?></div>
  </div>
  <?php else: // this is displayed if there are no comments fo far ?>
    <?php if ( comments_open() ) :
      // if comments are open, but there are no comments.
      else : // comments are closed.
      endif;
    endif; ?>

</div>
 
