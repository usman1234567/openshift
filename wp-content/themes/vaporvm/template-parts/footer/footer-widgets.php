<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	 is_active_sidebar( 'sidebar-3' ) ) :
?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentyseventeen' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="widget-column footer-widget-1 footer-nav col-md-2">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
		
			</div>
		<?php }https://www.vaporvm.com/careers/
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
			<div class="widget-column footer-widget-2 footer-nav col-md-2">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
			<div class="widget-column footer-widget-3 footer-nav col-md-2">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
			<div class="widget-column footer-widget-4 footer-nav col-md-2">
				<?php dynamic_sidebar( 'sidebar-5' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-6' ) ) { ?>
			<div class="widget-column footer-widget-5 footer-nav col-md-2">
				<?php dynamic_sidebar( 'sidebar-6' ); ?>
			</div>
		<?php } ?>
        
	</aside><!-- .widget-area -->

<?php endif; ?>
