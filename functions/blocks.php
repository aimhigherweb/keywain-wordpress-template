<?php

	function my_acf_init() {
		if(function_exists('acf_register_block')) {
			acf_register_block(array(
				'name' => 'block_standard',
				'title' => 'Standard Block',
				'description' => 'A custom content block',
				'render_callback' => 'block_standard_render_callback',
				'category' => 'design',
				'icon' => 'align-pull-right',
			));

			acf_register_block(array(
				'name' => 'services_block',
				'title' => 'Services Block',
				'description' => 'A block to showcase a number of services',
				'render_callback' => 'services_block_render_callback',
				'category' => 'design',
				'icon' => 'table-row-after',
			));

			acf_register_block(array(
				'name' => 'logos_block',
				'title' => 'Logos Block',
				'description' => 'A block to showcase a number of logos',
				'render_callback' => 'logos_block_render_callback',
				'category' => 'design',
				'icon' => 'ellipsis',
			));

			acf_register_block(array(
				'name' => 'address_block',
				'title' => 'Address Block',
				'description' => 'A block to display the office address on the page',
				'render_callback' => 'address_block_render_callback',
				'category' => 'design',
				'icon' => 'location',
			));

			acf_register_block(array(
				'name' => 'team_block',
				'title' => 'Team Profiles',
				'description' => 'A block to display team profiles',
				'render_callback' => 'team_block_render_callback',
				'category' => 'design',
				'icon' => 'id-alt',
			));
		}
	}
	add_action('acf/init', 'my_acf_init');

	function block_standard_render_callback($block) {
		include(get_theme_file_path('/blocks/standard.php'));
	}

	function services_block_render_callback($block) {
		include(get_theme_file_path('/blocks/services.php'));
	}

	function logos_block_render_callback($block) {
		include(get_theme_file_path('/blocks/logos.php'));
	}

	function address_block_render_callback($block) {
		include(get_theme_file_path('/blocks/address.php'));
	}

	function team_block_render_callback($block) {
		include(get_theme_file_path('/blocks/team.php'));
	}

?>
