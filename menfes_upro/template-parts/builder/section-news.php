<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$args = array(
		'post_type' => 'post', 
		'posts_per_page' => -1, 
	);

	if($default_custom == 'Custom'){
		$args['post__in'] = wp_list_pluck($custom, 'ID');
		$args['orderby'] = 'post__in';
	}

	$wp_query = new WP_Query($args);
	?>

	<?php if($wp_query->have_posts()): ?>
		<section class="section s-news">
			<div class="container-fluid">
				<div class="d-lg-flex justify-content-between align-items-end">
					<div class="text">

						<?php if ($subtitle): ?>
							<div class="subtitle"><?= $subtitle ?></div>
						<?php endif ?>

						<?php if ($title): ?>
							<h2><?= $title ?></h2>
						<?php endif ?>

						<?= $text ?>

					</div>

					<?php if ($button): ?>			
						<div class="buttons d-none d-lg-block">
							<a href="<?= $button['url'] ?>" class="btn btn-primary"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?></a>
						</div>
					<?php endif ?>

				</div>
			</div>

			<div class="news-slider">
				<div class="swiper">
					<div class="swiper-wrapper">

						<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
							<div class="swiper-slide">
								<?php get_template_part('parts/content', 'post') ?>
							</div>
						<?php endwhile; ?>

					</div>
				</div>
				<div class="swiper-controls">
					<div class="swiper-pagination-progressbar d-none d-lg-block"><div class="swiper-pagination-progressbar-fill"></div></div>
					<div class="swiper-button-prev"><i class="fa-regular fa-chevron-left"></i></div>
					<div class="swiper-pagination d-lg-none"></div>
					<div class="swiper-button-next"><i class="fa-regular fa-chevron-right"></i></div>
				</div>
			</div>
		</section>
		<?php 
	endif;
	wp_reset_query(); 
	?>

	<?php endif; ?>