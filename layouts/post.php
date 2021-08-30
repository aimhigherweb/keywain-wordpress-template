<h1><?php echo get_the_title(); ?></h1>

<?php
	if(check_field_value([get_the_tags()])) : ?>
		<ul class="tags">
			<?php foreach(get_the_tags() as $tag) : ?>

				<li>
				<?php echo $tag->name; ?>
				</li>

			<?php endforeach; ?>
		</ul>
	<?php endif;
?>

<div class="content post_content">
	<?php echo the_content(); ?>
</div>