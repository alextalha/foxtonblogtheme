<?php 

// add custom content to feeds and posts

function custom_excerpt($excerpt) {


    $excerpt = substr( $excerpt , 0, 80) . ' [...]'; 

	return $excerpt;
}

add_filter('custom_excerpt', 'custom_excerpt');
