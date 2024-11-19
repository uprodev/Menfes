<a href="<?php the_permalink() ?>" class="card">

	<?php if (has_post_thumbnail()): ?>
		<figure class="card-img-top">
			<?php the_post_thumbnail('full') ?>
		</figure>
	<?php endif ?>
	
	<div class="card-body">
		<div class="card-subtitle"><?= get_the_date() ?></div>
		<h3><?php the_title() ?></h3>
		<?php the_field('card_summary') ?>
	</div>
</a>