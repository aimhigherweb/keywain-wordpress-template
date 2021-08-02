<?php

	// Add global styles to editor
	function custom_gutenberg_styles() {
		add_theme_support('editor-styles');
		add_editor_style('editor.css');
	}
	add_action( 'after_setup_theme', 'custom_gutenberg_styles' );

	// Add Colour Palette to Gutenberg
	function disable_gutenberg_custom_colour_picker() {
		add_theme_support( 'disable-custom-colors' );
	}
	add_action( 'after_setup_theme', 'disable_gutenberg_custom_colour_picker' );

	function disable_gutenberg_custom_font_sizes() {
		add_theme_support('disable-custom-font-sizes');
	}
	add_action( 'after_setup_theme', 'disable_gutenberg_custom_font_sizes' );

	function add_custom_gutenberg_color_palette() {
		add_theme_support(
			'editor-color-palette',
			[
				[
					'name'  => 'Blue',
					'slug'  => 'blue',
					'color' => '#3b62a1',
				],
				[
					'name'  => 'Navy',
					'slug'  => 'navy',
					'color' => '#414656',
				],
				[
					'name'  => 'Grey',
					'slug'  => 'grey',
					'color' => '#a5abbd',
				],
				[
					'name'  => 'Yellow',
					'slug'  => 'yellow',
					'color' => '#fafa0f',
				],
				[
					'name'  => 'Light Yellow',
					'slug'  => 'yellow_light',
					'color' => '#e0e07c',
				],
				[
					'name'  => 'Black',
					'slug'  => 'black',
					'color' => '#000000',
				],
				[
					'name'  => 'White',
					'slug'  => 'white',
					'color' => '#ffffff',
				],
			]
		);
	}
	add_action( 'after_setup_theme', 'add_custom_gutenberg_color_palette' );
    
?>