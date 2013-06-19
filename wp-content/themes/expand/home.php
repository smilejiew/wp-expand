<?php
/**
 * The home page
 */

get_header();
get_sidebar('right');
get_sidebar('left-news');
?>
<!-- CONTENT -->
<?  get_template_part( 'content', 'page' ); ?>
<?php get_footer(); ?>