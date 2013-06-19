<?php
/**
 * The right sidebar containing
 * - markets list
 */

include('inc_global.php');
$page_id = $market_page_id;
$page    = get_page($page_id);
$regionList = get_pages( array( 'child_of' => $page_id, 'parent' => $page_id, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
?>
<div class="nav-right">
    <h2><?=$page->post_title;?></h2>
    <ul class="market-list">
    <?
        foreach ($regionList as $region):
            $attachments = get_posts(array(
                'post_type' => 'attachment',
                'numberposts' => 1,
                'post_status' => null,
                'post_parent' => $region->ID,
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
                    <a href="<?php echo get_permalink( $region->ID ); ?>" title="<?php echo $region->post_title ?>">
                        <?php echo wp_get_attachment_image( $img->ID, 'medium') ?>
                    </a>
                </li>
            <? endforeach; ?>
        <? endforeach; ?>
    </ul>
</div>