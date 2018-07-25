<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

		<div class="custom-header-media">
			<?php the_custom_header_markup(); ?>
		</div>
	<?php require (get_stylesheet_directory() . '/template-parts/header/site-branding.php'); ?>
</div><!-- .custom-header -->
