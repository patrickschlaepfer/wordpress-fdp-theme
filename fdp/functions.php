<?php

add_action( 'init', 'register_my_menu' );

function register_my_menu() {
  register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

// add a favicon to your
function blog_favicon() {
  echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

if ( function_exists('register_sidebar') )
register_sidebar();

/*
function my_fields($fields) {  
  $fields['new'] = '<p>Some new input field here</p>';  
  return $fields;  
}  
add_filter('comment_form_default_fields','my_fields'); 
*/

?>
