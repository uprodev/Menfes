<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="banner-home">

		<?php if ($image): ?>
			<div class="banner-image">
				<figure>
					<picture>
						<source media="(min-width: 768px)" srcset="<?= $image['url'] ?>" />
							<?= wp_get_attachment_image($image['ID'], 'full') ?>
						</picture>
					</figure>
				</div>
			<?php endif ?>

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-lg-5 pe-xl-0">
						<div class="banner-text">

							<?php if ($subtitle): ?>
								<div class="subtitle"><?= $subtitle ?></div>
							<?php endif ?>

							<?php if ($title): ?>
								<h1><?= $title ?></h1>
							<?php endif ?>

							<?= $text ?>

							<?php if ($primary_button || $secondary_link): ?>
								<div class="buttons">

									<?php if ($primary_button): ?>
										<a href="<?= $primary_button['url'] ?>" class="btn btn-primary"<?php if($primary_button['target']) echo ' target="_blank"' ?>><?= $primary_button['title'] ?></a>
									<?php endif ?>

									<?php if ($secondary_link): ?>
										<a href="<?= $secondary_link['url'] ?>" class="link-content"<?php if($secondary_link['target']) echo ' target="_blank"' ?>><?= $secondary_link['title'] ?></a>
									<?php endif ?>

								</div>
							<?php endif ?>

						</div>
					</div>
				</div>

				<?php if (is_array($usps) && checkArrayForValues($usps)): ?>
				<div class="banner-panel">
					<div class="swiper">
						<div class="swiper-wrapper">

							<?php foreach ($usps as $item): ?>
								<div class="swiper-slide">
									<div class="item">
										<span class="icon">

											<?php if ($item['icon_or_image'] == 'Icon' && $item['icon']): ?>
												<i class="<?= $item['icon'] ?>"></i>
											<?php endif ?>

											<?php if ($item['icon_or_image'] == 'Image' && $item['image']): ?>
												<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
											<?php endif ?>

										</span>
										
										<?php if ($item['title']): ?>
											<h5><?= $item['title'] ?></h5>
										<?php endif ?>
										
										<?= $item['text'] ?>

									</div>
								</div>
							<?php endforeach ?>
							
						</div>
					</div>
				</div>
			<?php endif ?>

		</div>
	</section>

	<?php endif; ?>