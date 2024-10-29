<div class="swiper-slide"<?php if($args['slider_navigation_text']) echo ' data-title="' . $args['slider_navigation_text'] . '"' ?>>
	<div class="row">
		<div class="col-md-6 offset-lg-1">
			<div class="text">

				<?php if ($args['subtitle']): ?>
					<div class="subtitle"><?= $args['subtitle'] ?></div>
				<?php endif ?>

				<?php if ($args['title']): ?>
					<h2><?= $args['title'] ?></h2>
				<?php endif ?>

				<?= $args['text'] ?>

				<div class="d-none d-md-flex align-items-center">

					<?php if ($args['logo']): ?>
						<div class="review-logo">
							<?= wp_get_attachment_image($args['logo']['ID'], 'full') ?>
						</div>
					<?php endif ?>

					<div class="review-info">

						<?php if ($args['name']): ?>
							<span><?= $args['name'] ?></span>
						<?php endif ?>

						<?= $args['function'] ?>

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-5">

			<?php if ($args['reviewer']): ?>
				<figure class="image">
					<?= wp_get_attachment_image($args['reviewer']['ID'], 'full') ?>
				</figure>
			<?php endif ?>

		</div>
	</div>
</div>