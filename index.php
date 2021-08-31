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
			)
		);
	}
	else if(is_category()) {
		get_template_part(
			'partials/layout', 
			null, 
			array(
				'template' => 'category',
			)
		);
	}
	else if(is_tag()) {
		get_template_part(
			'partials/layout', 
			null, 
			array(
				'template' => 'tag',
			)
		);
	}
	else {
		get_template_part('partials/layout');
	}

?>
