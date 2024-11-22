<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid justify-content-lg-between">

        <?php if ($field = get_field('full_logo_h', 'option')): ?>
          <a class="navbar-brand" href="<?= get_home_url() ?>">
            <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
              <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
            <?php else: ?>
              <?= wp_get_attachment_image($field['ID'], 'full') ?>
            <?php endif ?>
          </a>
        <?php endif ?>
        
        <div class="navbar-container">
          <div class="collapse navbar-collapse" id="navbarContent">
            <div class="inner" data-lenis-prevent>

              <?php wp_nav_menu( array(
                'theme_location'  => 'header',
                'container'       => '',
                'items_wrap'      => '<ul class="navbar-nav">%3$s</ul>'
              )); ?>

              <?php if ($field = get_field('contact_button_h', 'option')): ?>
                <a href="<?= $field['url'] ?>" class="btn btn-primary"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
              <?php endif ?>

            </div>
          </div>
          <div class="header-meta">

            <?php if ($field = get_field('phone_number_h', 'option')): ?>
              <a href="tel:<?= preg_replace('/[^0-9]/', '', $field) ?>" class="link-tel"><i class="fa-thin fa-phone"></i></a>
            <?php endif ?>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-base"><?php _e('Menu', 'Menfes') ?> <i class="fa-regular fa-bars"></i></span>
              <span class="navbar-shown"><?php _e('Sluiten', 'Menfes') ?> <i class="fa-regular fa-xmark"></i></span>
            </button>
            
            <?php custom_language_switcher() ?>

          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="page-wrapper">
    <main class="content">