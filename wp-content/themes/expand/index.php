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
<div class="content">
  <div class="wysiwyg">
  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
  </div>
</div>
<?php get_footer(); ?>