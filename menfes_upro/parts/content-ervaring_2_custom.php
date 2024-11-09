<div class="item">

	<?php if ($args['reviewer']): ?>
		<figure>
			<?= wp_get_attachment_image($args['reviewer']['ID'], 'full') ?>
		</figure>
	<?php endif ?>

	<?php if ($args['title']): ?>

		<?php if ($args['link']): ?>
			<a href="<?= $args['link']['url'] ?>"<?php if($args['link']['target']) echo ' target="_blank"' ?>>
			<?php endif ?>

			<h3><?= $args['title'] ?></h3>

			<?php if ($args['link']): ?>
			</a>
		<?php endif ?>

	<?php endif ?>

	<?= $args['text'] ?>

	<div class="item-footer d-md-flex align-items-center">

		<?php if ($args['logo']): ?>
			<div class="item-logo">
				<?= wp_get_attachment_image($args['logo']['ID'], 'full') ?>
			</div>
		<?php endif ?>

		<div class="item-info">

			<?php if ($args['name']): ?>
				<span><?= $args['name'] ?></span>
			<?php endif ?>

			<?= $args['function'] ?>

		</div>
	</div>
</div>