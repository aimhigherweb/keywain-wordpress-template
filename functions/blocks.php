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
				'name' => 'block_feature',
				'title' => 'Feature Block',
				'description' => 'A custom content block',
				'render_callback' => 'block_feature_render_callback',
				'category' => 'design',
				'icon' => 'align-wide',
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

			acf_register_block(array(
				'name' => 'last_updated',
				'title' => 'Last Updated',
				'description' => 'A block to display last updated date',
				'render_callback' => 'last_updated_block_render_callback',
				'category' => 'design',
				'icon' => 'calendar-alt',
				'mode' => 'edit',
				'supports' => [
					'mode' => false
				]
			));

			acf_register_block(array(
				'name' => 'operating_hours',
				'title' => 'Operating Hours',
				'description' => 'A block to display the operating hours',
				'render_callback' => 'operating_hours_block_render_callback',
				'category' => 'design',
				'icon' => 'clock',
				'mode' => 'edit',
			));

			acf_register_block(array(
				'name' => 'contact',
				'title' => 'Contact Block',
				'description' => 'A block to display the contact details',
				'render_callback' => 'contact_block_render_callback',
				'category' => 'design',
				'icon' => 'email',
				'mode' => 'edit',
			));
		}
	}
	add_action('acf/init', 'my_acf_init');

	function block_standard_render_callback($block) {
		include(get_theme_file_path('/blocks/standard.php'));
	}

	function block_feature_render_callback($block) {
		include(get_theme_file_path('/blocks/feature.php'));
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

	function last_updated_block_render_callback($block) {
		include(get_theme_file_path('/blocks/last_updated.php'));
	}

	function operating_hours_block_render_callback($block) {
		include(get_theme_file_path('/blocks/operating_hours.php'));
	}

	function contact_block_render_callback($block) {
		include(get_theme_file_path('/blocks/contact.php'));
	}
?>
