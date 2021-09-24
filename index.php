<?php
/**
 * The main template file
 *
 *
 * @package Keywain
 * @version 1.0
 */

 

	if($wp_query->is_posts_page) {
		get_template_part(
			'partials/layout', 
			null, 
			array(
				'template' => 'blog',
				'page_id' => get_option('page_for_posts')
			)
		);
	}
	else if(is_category()) {
		get_template_part(
			'partials/layout', 
			null, 
			array(
				'template' => 'category',
				'category' => get_queried_object()
			)
		);
	}
	else if(is_tag()) {
		get_template_part(
			'partials/layout', 
			null, 
			array(
				'template' => 'tag',
				'category' => get_queried_object()
			)
		);
	}
	else {
		get_template_part('partials/layout');
	}

?>
