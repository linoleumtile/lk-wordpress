<?php
 //register nav bar menu
function register_my_menu() {
  register_nav_menu('top-menu',__( 'Top Menu' ));
}
add_action( 'init', 'register_my_menu' );
?>
<?php 
function bootstrap_hover_dropdown()
{
	// Register the script like this for a theme:
	wp_register_script( 'hover-dropdown', get_template_directory_uri() . '/js/twitter-bootstrap-hover-dropdown.min.js', array( 'bootstrap' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'hover-dropdown' );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_hover_dropdown' );
?>
<?php 
function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
?>
<?php
// Register Custom Navigation Walker
require_once('twitter_bootstrap_nav_walker.php');
?>
<?php
	register_sidebar();
	?>
<?php
if ( function_exists('register_sidebar') )
{ register_sidebar();
register_sidebars(2, array('name'=>'Footer %d')); }
?>