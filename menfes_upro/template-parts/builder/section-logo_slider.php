<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php $items = $default_custom == 'Custom' ? $custom : get_field('slider_l', 'option') ;
	if (is_array($items) && checkArrayForValues($items)): ?>

		<section class="section s-logos-slider"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="container-fluid">

				<?php if ($title): ?>
					<div class="text-center">
						<h4><?= $title ?></h4>
					</div>
				<?php endif ?>

			</div>

			<div class="logos-slider">
				<div class="swiper">
					<div class="swiper-wrapper">

						<?php 
						$loops = count($items) > 4 ? 2 : 1;

						for ($i = 1 ; $i <= $loops; $i++) { ?>
							
							<?php foreach($items as $item): ?>

								<?php if ($item['logo_image']): ?>
									<div class="swiper-slide">
										<figure>

											<?php if ($item['logo_link']): ?>
												<a href="<?= $item['logo_link']['url'] ?>" class="btn btn--secondary btn--with-arrow"<?php if($item['logo_link']['target']) echo ' target="_blank"' ?>>
												<?php endif ?>

												<?= wp_get_attachment_image($item['logo_image']['ID'], 'full') ?>
												
												<?php if ($item['logo_link']): ?>
												</a>
											<?php endif ?>

										</figure>
									</div>
								<?php endif ?>

							<?php endforeach; ?>

						<?php }
						?>

					</div>
				</div>
			</div>
		</section>

	<?php endif; ?>

	<?php endif; ?>