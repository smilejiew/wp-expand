<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 */

include('inc_global.php');
/* Image rotation */
$args = array(
            'post_type' => 'post',
            'cat' => $news_category,
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'post_date',
            'order' => 'DESC',
        );
$newslist = new WP_Query( $args );
?>
<div class="nav-left">
    <h2>News & Update</h2>
    <?php if($newslist->have_posts()): ?>
        <ul class="news-list">
            <?php while($newslist->have_posts()): $newslist->the_post();?>
                <li>
                    <div class="preview">
                    <?php
                        $attachments = get_posts(array(
                            'post_type' => 'attachment',
                            'numberposts' => 1,
                            'post_status' => null,
                            'post_parent' => $newslist->post->ID,
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
                            <a href="<?php echo get_permalink( $newslist->post->ID ); ?>" title="<?php the_title() ?>" class="preview-img">
                                <?php echo wp_get_attachment_image( $img->ID, 'thumbnail') ?>
                            </a>
                        <?php endforeach; ?>
                        <?php the_excerpt(); ?>
                    </div>
                    <div>
                        <a href="<?php echo get_permalink( $newslist->post->ID ); ?>"  title="<?php the_title() ?>" class="read-more">Read more</a>
                        <span class="date"><?php echo get_the_time('d/m/y', $newslist->post->ID);?></span>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>
<?php
    wp_reset_query();
    wp_reset_postdata();
?>