<div class="item">

	<?php if (has_post_thumbnail()): ?>
		<figure>
			<?php the_post_thumbnail('full') ?>
		</figure>
	<?php endif ?>
	
	<h3><?= get_field('title') ?: get_the_title() ?></h3>
	
	<?php the_field('text') ?>

	<div class="item-footer d-md-flex align-items-center">

		<?php if ($field = get_field('logo')): ?>
			<div class="item-logo">
				<?= wp_get_attachment_image($field['ID'], 'full') ?>
			</div>
		<?php endif ?>
		
		<div class="item-info">

			<?php if ($field = get_field('name')): ?>
				<span><?= $field ?></span>
			<?php endif ?>
			
			<?php the_field('function') ?>
			
		</div>
	</div>
</div>