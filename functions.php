<?php
add_action( 'wp_enqueue_scripts', 'vt_enqueue_styles' );

function vt_enqueue_styles() {
	wp_enqueue_style(
		'vt-style',
		get_stylesheet_uri()
	);
}
