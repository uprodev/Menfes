<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="section s-contact-form"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="container-fluid">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-6 col-xl-4 offset-xl-1">
						<div class="text">

							<?php if ($subtitle): ?>
								<div class="subtitle"><?= $subtitle ?></div>
							<?php endif ?>

							<?php if ($title): ?>
								<h2><?= $title ?></h2>
							<?php endif ?>

							<?= $text ?>

							<?php if (is_array($contact_information) && checkArrayForValues($contact_information)): ?>
							<div class="cp-contact d-none d-md-block">

								<?php if ($contact_information['image']): ?>
									<figure>
										<?= wp_get_attachment_image($contact_information['image']['ID'], 'full') ?>
									</figure>
								<?php endif ?>
								
								<?php if ($contact_information['contact_name']): ?>
									<p><strong><?= $contact_information['contact_name'] ?></strong></p>
								<?php endif ?>

								<?php if (is_array($contact_information['links']) && checkArrayForValues($contact_information['links'])): ?>
								<?php foreach ($contact_information['links'] as $item): ?>
									<?php if ($item['link']): ?>
										<p>
											<a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>

												<?php if ($item['icon']): ?>
													<i class="<?= $item['icon'] ?>"></i>
												<?php endif ?>

												<?= $item['link']['title'] ?>
											</a>
										</p>
									<?php endif ?>
								<?php endforeach ?>
							<?php endif ?>

						</div>
					<?php endif ?>

				</div>
			</div>

			<?php if ($form): ?>
				<div class="col-md-6">
					<div class="cp-contact-form">
						<?= do_shortcode('[contact-form-7 id="' . $form . '"]') ?>
					</div>
				</div>
			<?php endif ?>
			
		</div>
	</div>
</div>
</section>

<?php endif; ?>