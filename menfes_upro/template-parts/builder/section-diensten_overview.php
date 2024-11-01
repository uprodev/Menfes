<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="section s-services-full">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-md-8 col-xl-7">
					<div class="text text-center">

						<?php if ($subtitle): ?>
							<div class="subtitle"><?= $subtitle ?></div>
						<?php endif ?>

						<?php if ($title): ?>
							<h2><?= $title ?></h2>
						<?php endif ?>

						<?= $text ?>

					</div>
				</div>
			</div>

			<?php if (is_array($items) && checkArrayForValues($items)): ?>
			<div class="list-slider swiper">
				<div class="swiper-wrapper">

					<?php foreach ($items as $item): ?>
						<div class="swiper-slide">

							<?php if ($item['link']): ?>
								<a href="<?= $item['link']['url'] ?>" class="service-item"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
								<?php else: ?>
									<div class="service-item">
									<?php endif ?>

									<?php if ($item['image']): ?>
										<figure>
											<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
										</figure>
									<?php endif ?>

									<div class="item-text">

										<?php if ($item['title']): ?>
											<h3><?= $item['title'] ?></h3>
										<?php endif ?>

										<?= $item['text'] ?>

									</div>

									<?php if ($item['link']): ?>
									</a>
								<?php else: ?>
								</div>
							<?php endif ?>

						</div>
					<?php endforeach ?>

				</div>
				<div class="swiper-controls d-md-none">
					<div class="swiper-button-prev"><i class="fa-regular fa-chevron-left"></i></div>
					<div class="swiper-pagination"></div>
					<div class="swiper-button-next"><i class="fa-regular fa-chevron-right"></i></div>
				</div>
			<?php endif ?>

			<?php if ($button): ?>
				<div class="btn-wrap pt-5 text-center">
					<a href="<?= $button['url'] ?>" class="btn btn-primary"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?></a>
				</div>
			<?php endif ?>

		</div>
	</div>
</section>

<?php endif; ?>