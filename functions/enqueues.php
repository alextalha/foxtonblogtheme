<?php 

function enqueues() {
	/* Styles */
	//wp_register_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css', false, '4.0.0-beta.2', null);
	//wp_enqueue_style('bootstrap-css');

	/* Scripts */
	
	//wp_register_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.2/js/all.js', false, '5.0.2', null);
	//wp_enqueue_script('font-awesome');
  //	wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
	//wp_enqueue_script('modernizr');
	//wp_register_script('jquery-3.2.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, '3.2.1', true);
	//wp_enqueue_script('jquery-3.2.1');
	//wp_register_script('popper',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', false, '1.12.3', true);
	//wp_enqueue_script('popper');
  	//wp_register_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.min.js', false, '4.0.0-beta.2', true);
	//wp_enqueue_script('bootstrap-js');
	//wp_register_script('foxton-js', get_template_directory_uri() . '/assets/js/foxton.js', false, null, true);
	//wp_enqueue_script('b4st-js');
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'enqueues', 100);