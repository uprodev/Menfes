<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($content): ?>
		<section class="section s-details"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-lg-10 col-xl-8">

						<?php 
						foreach ($content as $item):

							switch ($item['acf_fc_layout']) {

								case 'text_block':
								?>

								<div class="details-box pt-<?= $item['spacing_top'] ? '1' : '0' ?> pb-<?= $item['spacing_bottom'] ? '1' : '0' ?>">

									<?php if ($item['title']): ?>
										<<?= $item['h2_h3'] ?>><?= $item['title'] ?></<?= $item['h2_h3'] ?>>
									<?php endif ?>

									<?php if ($item['subtitle']): ?>
										<div class="subtitle"><?= $item['subtitle'] ?></div>
									<?php endif ?>
									
									<?= $item['text_content'] ?>

								</div>

								<?php 
								break;

								case 'quote_block':
								?>

								<div class="details-box pt-<?= $item['spacing_top'] ? '1' : '0' ?> pb-<?= $item['spacing_bottom'] ? '1' : '0' ?>">
									<div class="details-quote">

										<?php if ($item['subtitle']): ?>
											<div class="subtitle"><?= $item['subtitle'] ?></div>
										<?php endif ?>

										<?php if ($item['description']): ?>
											<div class="h3"><?= $item['description'] ?></div>
										<?php endif ?>
										
										<?php if ($item['title']): ?>
											<p><?= $item['title'] ?></p>
										<?php endif ?>
										
									</div>
								</div>

								<?php 
								break;

								case 'social_share_icons':
								?>

								<div class="details-footer">

									<?php if ($field = get_field('back_to_previous_page_text_s', 'option')): ?>
										<a href="#" class="link-back" onclick="window.history.back();"><i class="fa-regular fa-chevron-left"></i><?= $field ?></a>
									<?php endif ?>
									
									<div class="socials d-flex align-items-center">

										<?php if ($field = get_field('social_text_before_icons_s', 'option')): ?>
											<span><?= $field ?></span>
										<?php endif ?>

										<?php if (($items = get_field('socials_s', 'option')) && is_array($items) && checkArrayForValues($items)): ?>
										<div class="d-flex align-items-center">

											<?php foreach ($items as $item): ?>
												<?php if ($item['icon'] && $item['link']): ?>
													<a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><i class="<?= $item['icon'] ?>"></i></a>
												<?php endif ?>
											<?php endforeach ?>
											
										</div>
									<?php endif ?>

								</div>
							</div>

							<?php 
							break;

							case 'image_with_text':
							?>

							<?php if ($item['image']): ?>
								<div class="details-box pt-<?= $item['spacing_top'] ? '1' : '0' ?> pb-<?= $item['spacing_bottom'] ? '1' : '0' ?>">
									<div class="details-image">
										<figure>
											<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>

											<?php if ($item['image_description']): ?>
												<figcaption><?= $item['image_description'] ?></figcaption>
											<?php endif ?>

										</figure>
									</div>
								</div>
							<?php endif ?>

							<?php 
							break;


							default:
							break;

						}

					endforeach ?>						

				</div>
			</div>
		</div>
	</section>
<?php endif ?>

<?php endif; ?>