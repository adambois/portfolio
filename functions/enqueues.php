<?php

function ads_enqueues() {
	/* Styles */
	
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/style.css', false, '4.0.0.alpha', null);
	wp_enqueue_style('bootstrap-css');
	wp_register_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css', false, '4.4.0', null);
	wp_enqueue_style('font-awesome-css');
    wp_register_style('jasny-bootstrap-css', get_template_directory_uri() . '/styles/jasny-bootstrap.min.css', false, '1', null);
    wp_enqueue_style('jasny-bootstrap-css');
    
	/* Scripts */
	
	wp_enqueue_script( 'jquery' );
  	wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '4.4.0', null);
	wp_enqueue_script('modernizr');
    
    wp_register_script('tether', get_template_directory_uri() . '/js/tether.min.js', false, '1', null);
	wp_enqueue_script('tether');
    
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/dist/js/bootstrap.min.js', false, '4.4.0', null);
	wp_enqueue_script('bootstrap-js');
    
    wp_register_script('custom-js', get_template_directory_uri() . '/js/custom.js', false, '1', null);
	wp_enqueue_script('custom-js');
    
    wp_register_script('classie-js', get_template_directory_uri() . '/js/classie.js', false, '1', null);
	wp_enqueue_script('classie-js');
    
    wp_register_script('jasny-bootstrap-js', get_template_directory_uri() . '/js/jasny-bootstrap.js', false, '1', null);
	wp_enqueue_script('jasny-bootstrap-js');
    
    wp_register_script('jquery.mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', false, '1', null);
	wp_enqueue_script('jquery.mixitup');
    
    
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'ads_enqueues', 100);