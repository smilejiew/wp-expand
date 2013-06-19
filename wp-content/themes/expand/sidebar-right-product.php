<?php
/**
 * The right sidebar containing
 * - product list
 */

include('inc_global.php');
$page_id = $product_page_id;
$page    = get_page($page_id);
$productList = get_pages( array('sort_column' => 'post_date', 'sort_order' => 'desc', 'child_of' => $page_id ) );
?>
<div class="nav-right">
    <h2><?=$page->post_title;?></h2>
    <marquee class="product-slide" behavior="scroll" direction="up">
        <ul class="attachment-list">
        <?
            foreach ($productList as $product):
                if ($product->post_parent == $page_id) {
                    $continue;
                }
                $attachments = get_posts(array(
                    'post_type' => 'attachment',
                    'numberposts' => 1,
                    'post_status' => null,
                    'post_parent' => $product->ID,
                    'orderby'     => 'post_date',
                    'order'       => 'DESC',
                    'meta_query'  => array(
                        array(
                            'key' => '_custom_tag',
                            'value' => 'preview',
                        ),
                    ),
                ));
                foreach ($attachments as $img):
        ?>
                <li>
                    <a href="<?php echo get_permalink( $product->ID ); ?>" title="<?php echo $product->post_title ?>">
                        <?php echo wp_get_attachment_image( $img->ID, 'medium') ?>
                    </a>
                </li>
            <? endforeach; ?>
        <? endforeach; ?>
        </ul>
    </marquee>
</div>