<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<nav id="top-header" class="navbar" role="navigation">
  <div>
    <div class="navbar-header">
      <a class="navbar-brand waves-effect waves-light page-scroll col-md-1 col-lg-2 visible-xs visible-sm" href="<?= get_home_url(); ?>">
        <img src="<?=get_template_directory_uri()?>/img/logo.png" class="img-responsive" alt="CIAB">
      </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse menu top-menu">
    	<div class="container">
   			<div class="col-md-6">
          <?php
            if(is_active_sidebar('text-nav')){
              dynamic_sidebar('text-nav');
            }
          ?>
   			</div>
      	<div class="nav navbar-nav col-md-6 pull-right">
      		<?php wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
      	</div>
    	</div>
    </div><!-- top-menu -->
    <div class="col-md-12" style="padding: 0">
      <div class="collapse navbar-collapse menu tb-mobile-menu" id="bs-example-navbar-collapse-1">
      	<div class="container">
      		<a class="navbar-brand waves-effect waves-light page-scroll col-md-1 col-lg-2 hidden-xs hidden-sm" href="<?=get_home_url()?>">
        		<img src="<?=get_template_directory_uri()?>/img/logo.png" class="img-responsive" alt="CIAB">
      		</a>
          <div class="nav navbar-nav navbar-js col-md-11 col-lg-10">
            <?php wp_nav_menu( array( 'theme_location' => 'main-nav' ) ); ?>
          </div>
      	</div>
      </div>
    </div>
  </div>
</nav>