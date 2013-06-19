<?php
/**
 * Template Name: Single Column
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header();

include('inc_global.php');

$page = get_page(get_the_ID());

?>
<div class="content">
    <?=$page->post_content;?>
</div>

<? get_footer(); ?>
