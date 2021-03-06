<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage CIAB
 * @since 1.0
 * @version 1.0
 * Template Name: Home
 * 
 *
 */
 echo get_header(); ?>
<section class="content-text">
		<?php   
		$post = get_page($id); 
			// echo $post->post_content;  
			// echo do_shortcode( ' [ ciab_shortcode ] ' );
		echo apply_filters( 'the_content', $post->post_content );
		?>
</section> 
<?= get_footer(); ?>