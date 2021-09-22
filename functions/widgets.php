<?php

// Custom Widget Areas
if ( function_exists('register_sidebar') ) {     
	// Emergency Notice Widget Area    
	register_sidebar(array(
		'before_widget' => '<div class="%2$s">',
		'after_widget' => '</div>',
		'name' => 'Emergency Notice',  
		'id' => 'notice'
	));

	// Popup Notice Widget Area
	register_sidebar(array(
		'before_widget' => '<div class="%2$s">',
		'after_widget' => '</div>',
		'name' => 'Popup Notice',  
		'id' => 'notice_popup'
	));

	// Booking Sidebar
	register_sidebar(array(
		'before_widget' => '<div class="%2$s">',
		'after_widget' => '</div>',
		'name' => 'Booking Sidebar',  
		'id' => 'booking'
	));

	// Footer Widget
	register_sidebar(array(
		'before_widget' => '<div class="%2$s">',
		'after_widget' => '</div>',
		'name' => 'Footer Widget',  
		'id' => 'footer_widget'
	));
}

?>