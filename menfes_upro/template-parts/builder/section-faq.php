<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="section s-faq">

		<?php if ($image): ?>
			<div class="image">
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
					<div class="col-md-6 pe-xl-0">
						<div class="text">

							<?php if ($subtitle): ?>
								<div class="subtitle"><?= $subtitle ?></div>
							<?php endif ?>
							
							<?php if ($title): ?>
								<h2><?= $title ?></h2>
							<?php endif ?>
							
							<?= $text ?>

							<div class="accordion" id="accordion">

								<?php foreach ($items as $index => $item): ?>
									<?php if ($item['title'] && $item['text']): ?>
										<div class="accordion-item">
											<div class="accordion-header">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index + 1 ?>" aria-expanded="false" aria-controls="collapse<?= $index + 1 ?>">

													<?php if ($item['icon']): ?>
														<i class="<?= $item['icon'] ?>"></i>
													<?php endif ?>

													<?= $item['title'] ?>
												</button>
											</div>
											<div id="collapse<?= $index + 1 ?>" class="accordion-collapse collapse" data-bs-parent="#accordion">
												<div class="accordion-body"><?= $item['text'] ?></div>
											</div>
										</div>
									<?php endif ?>
								<?php endforeach ?>
								
							</div>

							<?php if ($button || $secondary_link): ?>
								<div class="buttons">

									<?php if ($button): ?>
										<a href="<?= $button['url'] ?>" class="btn btn-primary"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?></a>
									<?php endif ?>

									<?php if ($secondary_link): ?>
										<a href="<?= $secondary_link['url'] ?>" class="link-content"<?php if($secondary_link['target']) echo ' target="_blank"' ?>><?= $secondary_link['title'] ?></a>
									<?php endif ?>

								</div>
							<?php endif ?>

						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>