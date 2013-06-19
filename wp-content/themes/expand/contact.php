<?php
/**
 * Template Name: Contact
 */
    get_header();
    get_sidebar('right');
    while ( have_posts() ) : the_post();
        $page_id = get_the_ID();
?>
<div class="content">
    <h1><?php the_title();?></h1>
    <div class="wysiwyg">
        <?
            the_content();
            echo '<br>';
            echo do_shortcode('[contact_form]');
        ?>
    </div>
</div>
<?php
  endwhile; // end of the loop.
  get_footer();
?>
