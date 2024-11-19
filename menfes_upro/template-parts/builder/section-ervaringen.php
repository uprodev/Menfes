<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$args = array(
		'post_type' => 'ervaring', 
		'posts_per_page' => -1, 
	);

	switch ($ervaringen_select) {
		case 'Default':
		$posts = get_posts($args);
		break;
		case 'Selection':
		$args['post__in'] = wp_list_pluck($selection, 'ID');
		$args['orderby'] = 'post__in';
		$posts = get_posts($args);
		break;
		
		default:
		$posts = $custom;
		break;
	}

	$is_posts = ($ervaringen_select == 'Default' || $ervaringen_select == 'Selection') && isset($posts) && is_array($posts) && !empty($posts);
	$is_custom = $ervaringen_select == 'Custom' && is_array($custom) && !empty($custom);
	?>

	<?php if ($is_posts || $is_custom): ?>
		<section class="section s-reviews"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="container-fluid">
				<div class="reviews-slider">
					<div class="swiper swiper-main">
						<div class="swiper-wrapper">

							<?php foreach ($posts as $post): ?>
								<?php 
								$fields = ['subtitle', 'title', 'text', 'logo', 'name', 'function', 'reviewer', 'slider_navigation_text'];
								foreach ($fields as $field){
									$$field = $is_posts ? get_field($field, $post->ID) : $post[$field];
								}
								get_template_part('parts/content', 'ervaring', ['subtitle' => $subtitle, 'title' => $title, 'text' => $text, 'logo' => $logo, 'name' => $name, 'function' => $function, 'reviewer' => $reviewer]);
								?>
							<?php endforeach ?>

						</div>
					</div>
					<div class="swiper-controls">
						<div class="swiper-button-prev"><i class="fa-regular fa-chevron-left"></i></div>
						<div class="swiper-pagination d-lg-none"></div>
						<div class="d-none d-lg-block swiper-thumbs-wrapper">
							<div class="swiper swiper-thumbs">
								<div class="swiper-wrapper">

									<?php foreach ($posts as $post): ?>
										<div class="swiper-slide"><?= $slider_navigation_text ?></div>
									<?php endforeach ?>

								</div>
							</div>
						</div>
						<div class="swiper-button-next"><i class="fa-regular fa-chevron-right"></i></div>
					</div>
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>