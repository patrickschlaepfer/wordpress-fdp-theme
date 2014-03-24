<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes('xhtml'); ?>>
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title(' - ', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <script type="text/javascript" src="/wp-content/themes/fdp/js/jquery.js"></script>
  <script type="text/javascript" src="/wp-content/themes/fdp/js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript" src="/wp-content/themes/fdp/js/jquery.easing.min.js"></script>
  
  
  <script type="text/javascript" src="/wp-content/themes/fdp/js/cufon-yui.js"></script>
  <script type="text/javascript" src="/wp-content/themes/fdp/js/Bebas_400.font.js"></script> 
  
  <script type="text/javascript" src="/wp-content/themes/fdp/js/Linotype_Univers_420_Condensed_400.font.js"></script>
  <script type="text/javascript" src="/wp-content/themes/fdp/js/Linotype_Univers_420_Condensed_700.font.js"></script>
  <script type="text/javascript" src="/wp-content/themes/fdp/js/Linotype_Univers_320_CnLight_600.font.js"></script>
  <script type='text/javascript'>
    Cufon('.logoLink')('h1')('h2')('h3')('#container_slogan')('.teaser');

    $(document).ready(function(){ 
        $(".lavaLampWithImage, .lavaLampNoImage, .lavaLampBottomStyle").lavaLamp({
            fx: "backout",
            speed: 700
         });
	
    });
    
    
  </script>

<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" type="image/x-icon" />

<script type='text/javascript'>
// Edit to suit your needs.
var ADAPT_CONFIG = {
  // Where is your CSS?
  path: '/wp-content/themes/fdp/css/',

  // false = Only run once, when page first loads.
  // true = Change on window resize and page tilt.
  dynamic: true,

  // First range entry is the minimum.
  // Last range entry is the maximum.
  // Separate ranges by "to" keyword.
  range: [
    '0px    to 760px  = mobile.css',
    '760px  to 980px  = 720.css',
    '980px  to 1280px = 960.css',
    '1280px to 1600px = 1200.css',
    '1600px to 1920px = 1560.css',
    '1920px           = fluid.css'
  ]
};
</script>
<script src="/wp-content/themes/fdp/js/adapt.min.js"></script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container_12">
  <div class="grid_6 top">
    <a href="/"><img src="/wp-content/themes/fdp/images/logoFDP.jpg" alt="FDP . Die Liberalen" /></a>
  </div>
  <div class="grid_5 portrait">
    <div class="teaser"><a class="teaser" href="index.php">Marc Schlieper</a><br/>
      <?php bloginfo('description');?>
    </div>
  </div>
  <hr style="border:solid #f3f3f3 1px;height:1px;" class="grid_12">
  <div class="grid_12">
    <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'primary-menu', 
                            'container_class' => 'mainnavi',
                            'items_wrap' => '<ul class="lavaLampBottomStyle">%3$s</ul>'  ) ); 
    ?>
  </div> 
  <div class="grid_12 alignright">
      <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div style="left: 400px;">
      <label for="s" style="display:none;">Suche nach:</label>
      <input name="s" type="text" maxlength="1000" id="s" class="SearchText" />
      <input type="image" id="search_submit" class="SearchButton" src="/wp-content/themes/fdp/images/searchButton.gif" alt="Suchen" style="border-width:0px;" />
                    <!--
                    <input type="text" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" />
                    <input type="submit" id="search_submit" value="Suchen" />
                    -->
      </div>
      </form>
  </div>

