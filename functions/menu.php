<?php 

/*
slug => nome amigavel no admin
*/
//Registro menu  

// Register Navigation Menus
// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'my_main_menu' => 'Main Menu',
	);
	register_nav_menus( $locations );
}

add_action( 'init', 'custom_navigation_menus' );

/* Estilizando a li */

function special_nav_class( $classes, $item, $args ) {
    if ( 'my_main_menu' === $args->theme_location ) {

        $classes[] = 'nav-item';
    }

    return $classes;
}

add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 3 );

