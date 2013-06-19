<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="body">
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <div id="site-wrapper">
    <!-- HEADER -->
    <div id="header">
      <?php /* Site Logo */ ?>
      <h1 id="page-logo" class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a></h1>

      <?php /* Main menu */ ?>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-menu', 'menu_class' => 'main-menu', 'link_after' => '<span></span>', 'depth' => 1, 'exclude' => 6) ); ?>

      <?php /* Main banner */ ?>
      <?php $header_image = get_header_image();
        if ( ! empty( $header_image ) || is_home() ) { ?>
          <div id="banner">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
          </div>
      <?php } else { ?>
          <div id="banner">
            <a href="<?php echo get_permalink($page->ID); ?>"><?php echo get_the_post_thumbnail($page->ID, 'full') ?></a>
          </div>
      <? } ?>
    </div>

    <!-- BODY -->
	  <div id="body">