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
	else {
		get_template_part('partials/layout');
	}

?>
