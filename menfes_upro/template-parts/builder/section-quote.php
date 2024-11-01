<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="section s-quote">
		<div class="container-fluid">
			<div class="wrapper text-center">
				<div class="text">

					<?php if ($subtitle): ?>
						<div class="subtitle"><?= $subtitle ?></div>
					<?php endif ?>
					
					<?php if ($text): ?>
						<div class="h2">
							<?= $text ?>
						</div>
					<?php endif ?>

					<?php if ($name): ?>
						<p><?= $name ?></p>
					<?php endif ?>

				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>