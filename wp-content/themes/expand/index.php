<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Expand
 * @since Expand 1.0
 */

get_header();
get_sidebar('right');
get_sidebar('left');
?>
<!-- CONTENT -->
<?  get_template_part( 'content', 'page' ); ?>
<?php get_footer(); ?>