<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/banner-arrow.css" rel="stylesheet">
<link href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/footer-slider.css" rel="stylesheet">
<link href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/custom.css" rel="stylesheet">
<script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/js/contactty.js" type="text/javascript"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KN3VGJD');</script>
<!-- End Google Tag Manager -->
<script>
  gtag('config', 'AW-771293347/oI_9CJuFwpMBEKOB5O8C', {
    'phone_conversion_number': '+97144474594'
  });
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KN3VGJD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content">
<?php _e( 'Skip to content', 'twentyseventeen' ); ?>
</a>
<header id="masthead">
  <div class="container">
    <div class="col-md-3">
      <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></div>
    </div>
    <div class="col-md-9">
      <div class="widget-column">
        <?php dynamic_sidebar( 'top-link' ); ?>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="main-navigation-con">
    <div class="container">
      <div class="col-md-12">
        <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
          <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
          <?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
          </button>
          <?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
        </nav>
        <!-- #site-navigation --> 
      </div>
    </div>
  </div>
</header>
<div class="clear"></div>
<!-- #masthead --> 

