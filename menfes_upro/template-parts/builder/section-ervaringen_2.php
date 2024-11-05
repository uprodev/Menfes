<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$post_type = 'ervaring';
	$args = array(
		'post_type' => $post_type, 
		'posts_per_page' => 6, 
	);

	if($default_custom == 'Custom'){
		$args['post__in'] = wp_list_pluck($custom, 'ID');
		$args['orderby'] = 'post__in';
	}

	$wp_query = new WP_Query($args);
	?>

	<?php if($wp_query->have_posts()): ?>
		<section class="section s-services-list">
			<div class="container-fluid">

				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>

				<div class="row" id="response_ervaring">

					<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
						<div class="col-md-6">
							<?php get_template_part('parts/content', $post_type . '_2') ?>
						</div>
					<?php endwhile; ?>

				</div>

				<?php if ($wp_query->max_num_pages > 1 && $load_more_button_text): ?>
					<script> var this_page = 1; </script>

					<div class="btn-wrap text-center">
						<button type="button" class="btn btn-primary load_ervaring" data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>'><?= $load_more_button_text ?></button>
					</div>
				<?php endif ?>

			</div>
		</section>
		<?php 
	endif;
	wp_reset_query(); 
	?>

	<?php endif; ?>