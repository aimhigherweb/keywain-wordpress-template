<?php
/**
 * The main layout
 *
 *
 * @package keywain
 * @version 1.0
 */

	require_once ( ABSPATH . '/wp-admin/includes/file.php' );
	
	$template = 'default';
	$class = '';
	$page_id = get_the_ID();
	$category = null;

	if(isset($args, $args['template'])) {
		$template = $args['template'];
	}

	if(isset($args, $args['class'])) {
		$class = $args['class'];
	}

	if(isset($args, $args['page_id'])) {
		$page_id = $args['page_id'];
	}

	if(isset($args, $args['category'])) {
		$category = $args['category'];
	}

	$colour = get_theme_mod( 'main_colour' );

	$class = $class . ' theme_' . $colour;

	if(has_post_thumbnail()) {
		$class = $class . ' has_banner';
	}
?>

<!DOCTYPE html>
<html lang="en-AU">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge" />
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
		<base href="<?php echo get_site_url(); ?>" />
		<?php wp_head(); ?>

		<title><?php echo wp_get_document_title(); ?></title>

		<?php get_template_part('partials/dev-styles'); ?>

	</head>

	<body class="<?php echo $class; ?>">
		<?php get_template_part('partials/header'); ?>

		<main 
			id="main" 
			<?php if(is_active_sidebar('booking')) {echo 'data-booking';} ?>
		>
			<?php if (is_active_sidebar('notice')) : ?>
				<div class="notice">
					<?php dynamic_sidebar('notice'); ?>
				</div>
			<?php endif; ?>

			<?php if (is_active_sidebar('booking')) : ?>
				<?php get_template_part('parts/booking'); ?>
			<?php endif; ?>

			<?php if (has_post_thumbnail($page_id) || get_field('image', $category)) : ?>
				<?php get_template_part(
					'parts/banner',
					null,
					array(
						'page_id' => $page_id,
						'category' => $category
					)
				); ?>
			<?php endif; ?>

			<?php get_template_part('layouts/' . $template); ?>

			<?php if (is_active_sidebar('footer_widget') && get_field('footer_widget')) : ?>

				<div class="footer_widget">
					<?php dynamic_sidebar('footer_widget'); ?>
				</div>

			<?php endif; ?>
		</main>

		<?php get_template_part('partials/footer'); ?>

		<script src="<?php echo get_template_directory_uri(); ?>/src/js/main.js"></script>
	</body>
</html>