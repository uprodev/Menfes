<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="section s-list"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container-fluid">
			<div class="text-lg-center">

				<?php if ($subtitle): ?>
					<div class="subtitle"><?= $subtitle ?></div>
				<?php endif ?>
				
				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>
				
			</div>

			<?php if (is_array($list_items) && checkArrayForValues($list_items)): ?>
			<ul>

				<?php foreach ($list_items as $item): ?>
					<?php if ($item['item']): ?>
						<li><?= $item['item'] ?></li>
					<?php endif ?>
				<?php endforeach ?>
				
			</ul>
		<?php endif ?>
		
		<?php if ($primary_button): ?>
			<div class="btn-wrap text-center">
				<a href="<?= $primary_button['url'] ?>" class="btn btn-primary"<?php if($primary_button['target']) echo ' target="_blank"' ?>><?= $primary_button['title'] ?></a>
			</div>
		<?php endif ?>

	</div>
</section>

<?php endif; ?>