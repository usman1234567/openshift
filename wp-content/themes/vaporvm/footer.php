<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<div class="container">
<div class="partners">
  <div class="customer-logos slider">
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/stc-footer-logo.png"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/damac-footer-logo.png"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/dellemc-footer-logo.png"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/amazon-f-logo.jpg"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/azure-f-cloud.jpg"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/alibaba-f-logo.jpg"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/cisco-footer-logo.png"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/nokia-footer-logo.png"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/ncr-footer-logo.png"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/png-footer-logo.png"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/viva-logo.png"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/du-footer-logo.png"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/emirates-college-logo.png"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/diamondfoam-footer-logo.png"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/vmvare-footer-logo.png"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/honda-footer-logo.jpg"></div>
    <div class="slide1"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/nayatell-footer-logo.jpg"></div>
  </div>
 </div>
</div>
<footer class="site-footer" role="contentinfo">
  <div class="container">
    <?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );
				if ( has_nav_menu( 'social' ) ) : ?>
  </div>
  <!-- .container --> 
  <!-- #colophon -->
  <div class="clear"></div>
  <?php endif;
				//get_template_part( 'template-parts/footer/site', 'info' );
				?>
  </div>
</footer>
<div class="copyright">
  <div class="container"> Copyright © 2018 vaporvm.com | <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-of-use">Terms Of Service</a> </div>
</div>
</div>
<!-- #page --> 
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> 
<script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/js/footer-logo.js" type="text/javascript" language="javascript"></script>
<?php wp_footer(); ?>
<!-- Slaask Code for www.vaporvm.com -->
<script>
  !function(){var x=document.createElement("script");x.src="https://cdn.slaask.com/chat.js",x.type="text/javascript",x.async="true",x.onload=x.onreadystatechange=function(){var x=this.readyState;if(!x||"complete"==x||"loaded"==x)try{

    _slaask.init('spk-f8fddfa5-70b2-42de-b976-a3b066606728')

  }catch(x){}};var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(x,t)}();
</script>
<!-- Begin Constant Contact Active Forms -->
<script> var _ctct_m = "70032b10de239a201b23250316dabdf9"; </script>
<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
<!-- End Constant Contact Active Forms -->
</body></html>