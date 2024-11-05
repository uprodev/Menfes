<?php get_header(); ?>

<section class="s-tech-page">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-6">
				<div class="text text-center">

					<?php if ($field = get_field('subtitle_404', 'option')): ?>
						<div class="subtitle"><?= $field ?></div>
					<?php endif ?>
					
					<?php if ($field = get_field('title_404', 'option')): ?>
						<h1><?= $field ?></h1>
					<?php endif ?>
					
					<?= get_field('text_404', 'option') ?>

					<?php if ($field = get_field('link_404', 'option')): ?>
						<a href="<?= $field['url'] ?>" class="btn btn-primary"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>