<?php


	$page = get_option('page_for_posts');
	$page_data = get_page($page);	

?>

<h1>
	<?php echo single_cat_title(
		get_the_title($page) . ' - '
	); ?>
</h1>

<?php if(have_posts()) :

	echo '<ul class="posts">';
		
		while(have_posts()) : the_post(); ?>

			<?php get_template_part('parts/post'); ?>

		<?php endwhile;

	
	echo '</ul>'; 
	
	echo get_the_posts_pagination();

endif; ?>