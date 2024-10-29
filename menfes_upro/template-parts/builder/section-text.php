<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="section s-text-cols">
		<div class="container-fluid">

			<?php if ($subtitle): ?>
				<div class="subtitle"><?= $subtitle ?></div>
			<?php endif ?>
			
			<?php if ($title): ?>
				<h2><?= $title ?></h2>
			<?php endif ?>
			
			<?php if ($text): ?>
				<div class="text<?php if($columns == '2') echo ' text--cols2' ?>"><?= $text ?></div>
			<?php endif ?>
			
		</div>
	</section>

	<?php endif; ?>