<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg" style="margin:0!important;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- <link rel="icon" type="image/png" sizes="96x96" href="<?=get_template_directory_uri()?>/img/favicon-96x96.png"> -->
	<link rel="manifest" href="/manifest.json">
	<!-- <meta name="msapplication-TileColor" content="#ffffff"> -->
	<!-- <meta name="msapplication-TileImage" content="/ms-icon-144x144.png"> -->
	<!-- <meta name="theme-color" content="#ffffff"> -->
	<title> <?= the_title(); ?> | Hogar sin Enredos</title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
			<?php 
			if ( has_post_thumbnail() ) {
			?>
			<div class="div-flex" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
			<?php 
			} 
			?>
			<div class="navigation-top">
				<div class="wrap">
					<?php require (get_stylesheet_directory() . '/template-parts/navigation/navigation-top.php'); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php //require (get_stylesheet_directory() . '/template-parts/header/header-image.php'); ?>
	</header><!-- #masthead -->

	<?php
// }
	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	 // check if the post has a Post Thumbnail assigned to it.
		?>
	<div class="site-content-contain">
		<div id="content" class="site-content">
