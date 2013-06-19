<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 */

include('inc_global.php');

$page_id  = get_the_ID();
$attachments = get_posts(array(
    'post_type' => 'attachment',
    'numberposts' => -1,
    'post_status' => null,
    'post_parent' => $page_id,
    'orderby'     => 'post_date',
    'order'       => 'DESC',
    'meta_query'  => array(
        array(
            'key' => '_custom_tag',
            'value' => 'left',
        ),
    ),
));

if (!count($attachments)){
    return;
}
?>
<div class="nav-left">
    <ul class="attachment-list">
        <?foreach ($attachments as $img):?>
            <li><?php echo wp_get_attachment_image( $img->ID, 'medium') ?></li>
        <? endforeach; ?>
    </ul>
</div>