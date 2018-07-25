<?php 

function init_this_theme()
{
	load_theme_textdomain('simple_wp_theme', get_template_directory_uri().'/languages');
	show_admin_bar( false );

	wp_enqueue_style( 'bootstrap-4.1.3-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', [], null, 'all' );
	wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri(), '', null, 'all' );
}
add_action('after_setup_theme', 'init_this_theme');