<?php

function spm_excerpt_length($length) {
	return 25;
}
add_filter('excerpt_length', 'spm_excerpt_length', 999);


function spm_add_last_item_class( $items ) {
	$items[count($items)]->classes[] = 'last';
	
	return $items;
}
add_filter('wp_nav_menu_objects', 'spm_add_last_item_class');


// Disable default Contact Form 7 CSS
function spm_remove_wpcf7_css() {
	return false;
}
add_action('wpcf7_load_css', 'spm_remove_wpcf7_css');


// Add link titles to header menu
function spm_nav_menu_item_descriptions($item_output, $item, $depth, $args) {
	// 'show_description" is a custom wp_nav_menu() argument. Check for it here and do nothing if this argument is not present.
	if ( $args->show_description ) {
		$item_output .= '<span class="description">'.$item->description.'</span>';
	}
	
	return $item_output;
}
add_filter('walker_nav_menu_start_el', 'spm_nav_menu_item_descriptions', 10, 4);