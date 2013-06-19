<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header();
get_sidebar('right');
get_sidebar('left'); ?>
<div class="content">
    <?php while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?><span class="content-date"> - <? echo get_the_time('d/m/y', get_the_ID());?></span></h1>
        <div class="wysiwyg">
            <?php the_content(); ?>
        </div>

        <nav class="nav-single">
            <span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
            <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
        </nav><!-- .nav-single -->
    <?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>