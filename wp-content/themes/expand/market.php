<?php
/**
 * Template Name: Market

 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

    get_header();
    get_sidebar('right-product');
    get_sidebar('left');
    while ( have_posts() ) : the_post();
        $page_id = get_the_ID();
?>
<div class="content">
    <h1><?php the_title();?></h1>
    <div class="wysiwyg">
        <?php
            $attachments = get_posts(array(
                'post_type' => 'attachment',
                'numberposts' => 1,
                'post_status' => null,
                'post_parent' => $page_id,
                'orderby'     => 'post_date',
                'order'       => 'DESC',
                'meta_query'  => array(
                    array(
                        'key' => '_custom_tag',
                        'value' => 'main',
                    ),
                ),
            ));

            foreach ($attachments as $img) {
                $map = '<div class="market-map">';
                $map .= wp_get_attachment_image( $img->ID, 'large');
                $children = get_pages( array( 'child_of' => $page_id, 'parent' => $page_id, 'sort_column' => 'menu_order') );
                foreach( $children as $pg ) {
                    $custom_fields = get_post_custom($pg->ID);
                    $top_position = $custom_fields['top'][0] ? $custom_fields['top'][0] : 0;
                    $left_position = $custom_fields['left'][0] ? $custom_fields['left'][0] : 0;
                    $map .= '<a href="' . get_permalink( $pg->ID ) . '" class="bullet" style="top:' . $top_position . 'px;left:' . $left_position . 'px;"><span>bullet</span></a>';
                }
                $map .= '</div>';
                echo $map;
                $brark;
            }
            the_content();
        ?>
    </div>
</div>
<?php
  endwhile; // end of the loop.
  get_footer();
?>
