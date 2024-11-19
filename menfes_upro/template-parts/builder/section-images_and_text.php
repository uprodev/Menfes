<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="section s-text-images"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container-fluid">

			<?php if($images): ?>

				<div class="image d-none d-lg-flex">

					<?php foreach($images as $index => $image): ?>

						<?php if ($index + 1 <= count($images) / 2): ?>
							<figure>
								<span>
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								</span>
							</figure>
						<?php endif ?>

					<?php endforeach; ?>

				</div>

			<?php endif; ?>

			<div class="text text-center">

				<?php if ($subtitle): ?>
					<div class="subtitle"><?= $subtitle ?></div>
				<?php endif ?>
				
				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>
				
				<?= $text ?>

				<?php if ($button): ?>
					<div class="buttons justify-content-center">
						<a href="<?= $button['url'] ?>" class="btn btn-primary"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?></a>
					</div>
				<?php endif ?>

			</div>

			<?php if($images): ?>

				<div class="image d-none d-lg-flex">

					<?php foreach($images as $index => $image): ?>

						<?php if ($index + 1 > count($images) / 2): ?>
							<figure>
								<span>
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								</span>
							</figure>
						<?php endif ?>

					<?php endforeach; ?>

				</div>

			<?php endif; ?>

		</div>
	</section>

	<?php endif; ?>