<?php

$cat = get_the_category(get_the_ID());
$cat_name = $cat[0]->name;

?>

<li class="post">
	<span class="featured_image">
		<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'block_news'); ?>" alt="" />
	</span>
	<div class="wrapper">
		<h2><?php echo get_the_title(); ?></h2>
		<?php if(check_field_value([$cat]) && !in_array($cat_name, ['Uncategorised', 'Uncategorized'])) : ?>
			<p class="cat">
				<a href="<?php echo get_category_link($cat[0]); ?>">
					<?php echo $cat_name; ?>
				</a>
			</p>
		<?php endif; ?>
		<div class="content">
			<?php echo get_the_excerpt(); ?>
		</div>
		<a href="<?php echo get_the_permalink(); ?>" class="block_link">
			<span class="sr-only">Read full article <?php echo get_the_title(); ?></span>
		</a>
	</div>
</li>