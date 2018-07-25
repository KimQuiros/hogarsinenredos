<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="col-md-6">
<?php
	if(is_active_sidebar('footer-description')){
	  dynamic_sidebar('footer-description');
	}
?>
</div>

