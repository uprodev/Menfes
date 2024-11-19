<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="section s-text-image <?= $image_position == 'Right' ? 's-text-image--img-right' : 's-text-image--img-left' ?>"<?php if($id) echo ' id="' . $id . '"' ?>>

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
					<div class="col-md-6 align-self-center">
						<div class="text">

							<?php if ($subtitle): ?>
								<div class="subtitle"><?= $subtitle ?></div>
							<?php endif ?>

							<?php if ($title): ?>
								<h2><?= $title ?></h2>
							<?php endif ?>

							<?= $text ?>

							<?php if ($button || $optional_link): ?>
								<div class="buttons">

									<?php if ($button): ?>
										<a href="<?= $button['url'] ?>" class="btn btn-primary"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?></a>
									<?php endif ?>

									<?php if ($optional_link): ?>
										<a href="<?= $optional_link['url'] ?>" class="link-content"<?php if($optional_link['target']) echo ' target="_blank"' ?>><?= $optional_link['title'] ?></a>
									<?php endif ?>

								</div>
							<?php endif ?>

						</div>
					</div>
				</div>
			</div>
		</section>

		<?php endif; ?>