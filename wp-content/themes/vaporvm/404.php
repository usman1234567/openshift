<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="subpage-banner02-con">
  <header class="page-header">
    <div class="container">
      <div class="col-md-12">
        <h1 class="page-title">
          <?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?>
        </h1>
      </div>
    </div>
  </header>
  <!-- .page-header --> 
</div>
<div class="container">
  <div id="" class="content-area">
    <main id="main" class="site-main" role="main">
      <section class="error-404 not-found">
        <div class="col-md-9">
          <h2 class="bigger-text">404</h2>
          <p>
            <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyseventeen' ); ?>
          </p>
        </div>
        <!-- .page-content -->
        <div class="col-md-3">
          <?php get_sidebar(); ?>
        </div>
      </section>
      <!-- .error-404 --> 
    </main>
    <!-- #main --> 
  </div>
  <!-- #primary --> 
</div>
<!-- .wrap -->
<?php
get_footer();

