<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="banner-page"<?php if($id) echo ' id="' . $id . '"' ?>>

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
						<div class="banner-text d-md-flex flex-md-column justify-content-center">

							<?php if ($subtitle): ?>
								<div class="subtitle"><?= $subtitle ?></div>
							<?php endif ?>
							
							<?php if ($title): ?>
								<h1><?= $title ?></h1>
							<?php endif ?>

							<?= $text ?>

							<?php if ($button): ?>
								<div class="buttons">
									<a href="<?= $button['url'] ?>" class="btn btn-primary"<?php if($button['target']) echo ' target="_blank"' ?>>

										<?= $button['title'] ?>

										<?php if ($button_icon): ?>
											<i class="<?= $button_icon ?>"></i>	
										<?php endif ?>
										
									</a>
								</div>
							<?php endif ?>

						</div>
					</div>
				</div>
			</div>
		</section>

		<?php endif; ?>