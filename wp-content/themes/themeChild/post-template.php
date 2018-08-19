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
 * Template Name: Post
 * Template Post Type: post
 *
 */
 echo get_header(); ?>
<section class="content-post">
	<div class="container">
		<div class="detalle">
			<div class="col-md-9">
				<?php 
					if ( has_post_thumbnail() ) {
					?>
					<div class="dix-flex" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
					</div><!-- #masthead -->
					<?php
					}
				?>
				<div class="title">
					<h2>
					<?php 
						echo the_title();
					?>
					</h2>
				</div>
				<div class="col-xs-6">
					<time>
						<?php 
							$post_date = get_the_date('j F, Y'); echo $post_date;
						?>
					</time>
				</div>
				<div class="col-xs-6">
					<?php 
					the_category();
					?>
				</div>
				<div class="text">
					<p>
						<?php 
						$post = get_page($id); 
						echo apply_filters( 'the_content', $post->post_content );
						?>
					</p>
				</div>
			</div>
			<div class="col-md-3 side-bar">
				<ul>
					<h3>Post Recientes</h3>
				  <?php 
					$args = new WP_Query(array('orderby'=> 'date', 'post', 'posts_per_page' => 4, 'order'     => 'DESC'));
					if ( $args->have_posts() ) {
						while ( $args->have_posts() ) {
							$args->the_post();
						?>
							<li>
								<a href="<?= the_permalink(); ?>">
								<h4><?=get_the_title( $args->post->ID )?></h4>
								<p>
									<?= get_excerpt(75); ?>...
								</p>
								</a>
							</li>
						<?php
						}
						wp_reset_postdata();
					}
				  ?>
				</ul>
			</div>
		</div><!--detalle-->
	</div>
</section> 
<section class="comments-section">
		<div class="container">
			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
</section>
<?= get_footer(); ?>