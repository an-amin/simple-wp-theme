<?php 

function init_this_theme()
{
	load_theme_textdomain('simple_wp_theme', get_template_directory_uri().'/languages');
	show_admin_bar( false );

	// enque styles
	wp_enqueue_style( 'bootstrapcss_cdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', [], null, 'all' );
	wp_enqueue_style( 'fontawesome_cdn', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', [], null, 'all' );
	wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri(), '', null, 'all' );
	//enque scripts
	wp_enqueue_script('jquery_cdn', 'https://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script('popperjs_cdn', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
	wp_enqueue_script('bootstrapjs_cdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
	wp_enqueue_script('appjs', get_template_directory_uri().'/src/js/app.js');
}
add_action('after_setup_theme', 'init_this_theme');