<?php
// Conectar la carpeta tourChildren con Ciab
/*
 Theme Name:   HogarsinEnredos
 Description:  Hogar sin enredos
 Author:       Kim Quiros
 Template:     hogarsinenredos
 Version:      1.0.0
 License:      GNU General Public License v2 or later
 License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 Tags:         light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
 Text Domain:  Tours
*/

// Conectar hoja de estilos 

function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


// Conectar JS script
function custom_scripts() {
  wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/js/jquery.matchHeight.js', array(), false );
  wp_enqueue_script( 'custom-script' );
  wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), false );
 	wp_enqueue_script( 'custom-script' );
 	wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/js/plugins.min.js', array(), false );
 	wp_enqueue_script( 'custom-script' );
 	wp_register_script( 'script', get_stylesheet_directory_uri() . '/js/script.min.js', array(), false );
 	wp_enqueue_script( 'script' );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'custom_scripts', 99 );


register_nav_menus( array(
  'main-nav' => 'Menu',
  'media' => 'Social Media'
) );


//IMAGES
add_theme_support( 'post-thumbnails' );
add_image_size( 'twentyseventeen-featured-image', 2000, 1200, true );
add_image_size( 'twentyseventeen-thumbnail-avatar', 100, 100, true );

//Widget
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Footer Description',
        'id'            => 'footer-description',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => 'Texto del nav',
        'id'            => 'text-nav',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<p class="rounded">',
        'after_title'   => '</p>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

//add class body
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

function get_excerpt($count){  
    $permalink = get_permalink($post->ID);
    $excerpt = get_the_content(); 
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    //$excerpt = $excerpt.'... <a href="'.$permalink.'">leer mas</a>';
    return $excerpt;
}
  