<?php 
function fiora_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'fiora' ),
		'expanded' => __( 'Desktop Expanded Menu', 'fiora' ),
		'mobile'   => __( 'Mobile Menu', 'fiora' ),
		'footer'   => __( 'Footer Menu', 'fiora' ),
		'social'   => __( 'Social Menu', 'fiora' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'fiora_menus' );