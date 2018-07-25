<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container wrap">
				<div class="col-md-12">
					<?php
					require (get_stylesheet_directory() . '/template-parts/footer/footer-widgets.php');
					?>
					<div class="col-md-6">
						<div class="content-social-media">
							<?php wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
						</div>
					</div>
				</div>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
