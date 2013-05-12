<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header();
get_sidebar('right');
?>
<div class="content">
  <h1><?php _e( 'Not Found', 'expand' ); ?></h1>
  <div><?php _e( 'Apologies, but the page you requested could not be found.', 'expand'); ?></div>
</div>
<?php get_footer(); ?>