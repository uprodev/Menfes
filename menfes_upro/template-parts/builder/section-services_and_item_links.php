<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="section s-services"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col-md-6 col-lg-5">
					<div class="text">

						<?php if ($subtitle): ?>
							<div class="subtitle"><?= $subtitle ?></div>
						<?php endif ?>

						<?php if ($title): ?>
							<h2><?= $title ?></h2>
						<?php endif ?>

						<?= $text ?>

						<?php if (is_array($contact) && checkArrayForValues($contact)): ?>
						<div class="cp-contact d-none d-md-block">

							<?php if ($contact['image']): ?>
								<figure>
									<?= wp_get_attachment_image($contact['image']['ID'], 'full') ?>
								</figure>
							<?php endif ?>

							<?php if ($contact['title']): ?>
								<p><strong><?= $contact['title'] ?></strong></p>
							<?php endif ?>

							<?php if (is_array($contact['links']) && checkArrayForValues($contact['links'])): ?>
							<?php foreach ($contact['links'] as $item): ?>
								<?php if ($item['link']): ?>
									<p>
										<a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>

											<?php if ($item['icon']): ?>
												<i class="<?= $item['icon'] ?>"></i>
											<?php endif ?>

											<?= $item['link']['title'] ?> 
										</a>
									</p>
								<?php endif ?>
							<?php endforeach ?>
						<?php endif ?>

					</div>
				<?php endif ?>

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
		<div class="col-md-6">

			<?php if (is_array($quick_links) && checkArrayForValues($quick_links)): ?>
			<div class="list-slider swiper">
				<div class="swiper-wrapper">

					<?php foreach ($quick_links as $item): ?>
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
									
									<?php if ($item['title'] || $item['text']): ?>
										<div class="item-text">

											<?php if ($item['title']): ?>
												<h3><?= $item['title'] ?></h3>
											<?php endif ?>

											<?= $item['text'] ?>

										</div>
									<?php endif ?>

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
			</div>
		<?php endif ?>

	</div>
</div>

<?php if (is_array($contact) && checkArrayForValues($contact)): ?>
<div class="cp-contact d-md-none">

	<?php if ($contact['image']): ?>
		<figure>
			<?= wp_get_attachment_image($contact['image']['ID'], 'full') ?>
		</figure>
	<?php endif ?>

	<?php if ($contact['title']): ?>
		<p><strong><?= $contact['title'] ?></strong></p>
	<?php endif ?>

	<?php if (is_array($contact['links']) && checkArrayForValues($contact['links'])): ?>
	<?php foreach ($contact['links'] as $item): ?>
		<?php if ($item['link']): ?>
			<p>
				<a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>

					<?php if ($item['icon']): ?>
						<i class="<?= $item['icon'] ?>"></i>
					<?php endif ?>

					<?= $item['link']['title'] ?> 
				</a>
			</p>
		<?php endif ?>
	<?php endforeach ?>
<?php endif ?>

</div>
<?php endif ?>

</div>
</section>

<?php endif; ?>