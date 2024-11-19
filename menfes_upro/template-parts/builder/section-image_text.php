<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="section s-text-image-masked<?php if($is_waves) echo ' bg-waves'; if($image_right_left == 'Right') echo ' s-text-image-masked--img-right'; ?>"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col-md-6 col-lg-5 p-xl-0">

					<?php if ($image_small || $image_big): ?>
						<div class="image">

							<?php if ($image_small): ?>
								<figure>
									<span>
										<?= wp_get_attachment_image($image_small['ID'], 'full') ?>
									</span>
								</figure>
							<?php endif ?>

							<?php if ($image_big): ?>
								<figure>
									<span>
										<?= wp_get_attachment_image($image_big['ID'], 'full') ?>
									</span>
								</figure>
							<?php endif ?>

						</div>
					<?php endif ?>

				</div>
				<div class="col-md-6 align-self-md-center">
					<div class="text">

						<?php if ($subtitle): ?>
							<div class="subtitle"><?= $subtitle ?></div>
						<?php endif ?>

						<?php if ($title): ?>
							<h2><?= $title ?></h2>
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
		</div>
	</section>

	<?php endif; ?>