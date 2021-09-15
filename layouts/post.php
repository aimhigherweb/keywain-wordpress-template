<?php

$cat = get_the_category();
$cat_name = $cat[0]->name;

?>

<article class="article">
	<header>
		
		<h1><?php echo get_the_title(); ?></h1>

		<?php if(check_field_value([$cat]) && !in_array($cat_name, ['Uncategorised', 'Uncategorized'])) : ?>
			<p class="cat">
				Category: 
				<a href="<?php echo get_category_link($cat[0]); ?>">
					<?php echo $cat_name; ?>
				</a>
			</p>
		<?php endif; ?>

		<?php
			$tags = get_the_tags();
			if(check_field_value([$tags])) : ?>
				<ul class="tags">
					<?php foreach($tags as $tag) : ?>

						<li>
							<a href="<?php echo get_tag_link($tag); ?>">
								<?php echo $tag->name; ?>
							</a>
						</li>

					<?php endforeach; ?>
				</ul>
			<?php endif;
		?>
	</header>

	<div class="content post_content">
		<?php echo the_content(); ?>
	</div>
</article>