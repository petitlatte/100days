<?php 

//Widget
register_sidebar(); 

//RSS Feed
add_theme_support('automatic-feed-links');

//Custom Menu
register_nav_menu('navigation', 'Navigation');

//Custom Header
add_theme_support('custom-header', array(
	'width' => 1500,
	'height' => 250,
	'default-image' => '%s/test.jpg',
	'header-text' => false
	) );

//excerpt Word limit 
function my_length($length) {
	return 70;
}

add_filter('excerpt_mblength','my_length');

function my_more($more) {
	return '...';
}

add_filter('excerpt_more','my_more');

//Custom background
add_theme_support( 'custom-background' );






?>
