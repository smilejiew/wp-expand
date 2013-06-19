<?php
/**
 * The template used for displaying page content in page.php
 */
include('inc_global.php');

if(is_home()){
    $page_id = $home_page_id;
}else{
    $page_id = get_the_ID();
}
$page = get_page($page_id);

?>

<div class="content">
    <? if(!is_home()){ ?><h1><?=$page->post_title;?></h1><? } ?>
    <div class="wysiwyg">
        <?=$page->post_content;?>
    </div>
</div>
