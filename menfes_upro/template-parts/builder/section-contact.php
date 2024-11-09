<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="section s-contact"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container-fluid">
			<div class="row justify-content-between align-items-center">
				<div class="col-md-5 col-xl-4">
					<div class="text">

						<?php if ($subtitle): ?>
							<div class="subtitle"><?= $subtitle ?></div>
						<?php endif ?>

						<?php if ($title): ?>
							<h1><?= $title ?></h1>
						<?php endif ?>

						<?= $text ?>

						<?php if (is_array($contact_information) && checkArrayForValues($contact_information)): ?>
						<?php foreach ($contact_information as $item): ?>

							<?php if ($item['title']): ?>
								<div class="subtitle"><?= $item['title'] ?></div>
							<?php endif ?>

							<?php if ($item['links_or_text'] == 'Links' && is_array($item['links']) && checkArrayForValues($item['links'])): ?>
							<div class="contact-list">

								<?php foreach ($item['links'] as $item_2): ?>
									<?php if ($item_2['link']): ?>
										<p>
											<a href="<?= $item_2['link']['url'] ?>"<?php if($item_2['link']['target']) echo ' target="_blank"' ?>>

												<?php if ($item_2['icon']): ?>
													<i class="<?= $item_2['icon'] ?>"></i>
												<?php endif ?>

												<?= $item_2['link']['title'] ?>
											</a>
										</p>
									<?php endif ?>
								<?php endforeach ?>

							</div>
						<?php endif ?>

						<?php if ($item['links_or_text'] == 'Text' && $item['text']): ?>
							<address><?= $item['text'] ?></address>
						<?php endif ?>

					<?php endforeach ?>
				<?php endif ?>

			</div>
		</div>
		<div class="col-md-7">

			<?php if (is_array($form) && checkArrayForValues($form)): ?>
			<div class="form-wrapper">
				<div class="form-header">

					<?php if ($form['image']): ?>
						<figure>
							<?= wp_get_attachment_image($form['image']['ID'], 'full') ?>
						</figure>
					<?php endif ?>
					
					<div class="form-header-text">

						<?php if ($form['title']): ?>
							<h3><?= $form['title'] ?></h3>
						<?php endif ?>

						<?php if ($form['subtitle']): ?>
							<p><?= $form['subtitle'] ?></p>
						<?php endif ?>

					</div>
				</div>

				<?php if ($form['form']): ?>
					<div class="cp-contact-form">
						<?= do_shortcode('[contact-form-7 id="' . $form['form'] . '"]') ?>
					</div>
				<?php endif ?>
				
			</div>
		<?php endif ?>

	</div>
</div>
</div>
</section>

<?php endif; ?>