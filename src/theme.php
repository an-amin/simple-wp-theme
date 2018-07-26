<?php 

function init_this_theme()
{
	load_theme_textdomain('simple_wp_theme', get_template_directory_uri().'/languages');
	//disable admin bar in website:
	show_admin_bar(false);
	//theme support
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	// enque styles
	wp_enqueue_style( 'bootstrapcss_cdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', [], null, 'all' );
	wp_enqueue_style( 'fontawesome_cdn', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', [], null, 'all' );
	wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri(), '', null, 'all' );
	//enque scripts
	wp_enqueue_script('jquery_cdn', 'https://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script('popper-js', get_template_directory_uri().'/js/popper.min.js');
	wp_enqueue_script('bootstrapjs_cdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', ['jquery','popper-js'], null, true);
	wp_enqueue_script('appjs', get_template_directory_uri().'/src/js/app.js', ['jquery_cdn','bootstrapjs_cdn'], null, true);
}
add_action('after_setup_theme', 'init_this_theme');