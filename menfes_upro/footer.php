</main>

<footer class="footer">
  <div class="container-fluid">
    <div class="row">

      <?php if (($field = get_field('contact_info_f', 'option')) && is_array($field) && checkArrayForValues($field)): ?>
      <div class="col-md-6 col-lg-3">

        <?php if ($field['logo']): ?>
          <div class="footer-logo">
            <a href="<?= get_home_url() ?>">
              <?= wp_get_attachment_image($field['logo']['ID'], 'full') ?>
            </a>
          </div>
        <?php endif ?>

        <?php if ($field['text']): ?>
          <address><?= $field['text'] ?></address>
        <?php endif ?>

      </div>
    <?php endif ?>

    <?php if (($field = get_field('contact_info_column_2_f', 'option')) && is_array($field) && checkArrayForValues($field)): ?>
    <div class="col-md-6 col-lg-3">

      <?php if ($field['title']): ?>
        <div class="footer-title"><?= $field['title'] ?></div>
      <?php endif ?>
      
      <?php if (is_array($field['links']) && checkArrayForValues($field['links'])): ?>
      <div class="footer-contact">

        <?php foreach ($field['links'] as $item): ?>
          <?php if ($item['icon'] && $item['link']): ?>
            <p>
              <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
                <i class="<?= $item['icon'] ?>"></i>
                <?= $item['link']['title'] ?>
              </a>
            </p>
          <?php endif ?>
        <?php endforeach ?>

      </div>
    <?php endif ?>

    <?php if (is_array($field['socials']) && checkArrayForValues($field['socials'])): ?>
    <div class="socials d-flex align-items-center">

      <?php if ($field['socials_text']): ?>
        <span><?= $field['socials_text'] ?></span>
      <?php endif ?>
      
      <div class="d-flex align-items-center">

        <?php foreach ($field['socials'] as $item): ?>
          <?php if ($item['icon'] && $item['link']): ?>
            <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
              <i class="<?= $item['icon'] ?>"></i>
            </a>
          <?php endif ?>
        <?php endforeach ?>

      </div>
    <?php endif ?>

  </div>
</div>
<?php endif ?>

<div class="col-lg-6">
  <nav class="footer-menu">
    <div class="row">

      <?php if (($field = get_field('column_3_f', 'option')) && is_array($field['links']) && checkArrayForValues($field['links'])): ?>
      <div class="col-md-4">

        <?php if ($field['title']): ?>
          <div class="footer-title"><?= $field['title'] ?></div>
        <?php endif ?>
        
        <ul>

          <?php foreach ($field['links'] as $item): ?>
            <?php if ($item['link']): ?>
              <li>
                <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
              </li>
            <?php endif ?>
          <?php endforeach ?>

        </ul>
      </div>
    <?php endif ?>

    <?php if (($field = get_field('column_4_f', 'option')) && is_array($field['links']) && checkArrayForValues($field['links'])): ?>
    <div class="col-md-4">

      <?php if ($field['title']): ?>
        <div class="footer-title"><?= $field['title'] ?></div>
      <?php endif ?>

      <ul>

        <?php foreach ($field['links'] as $item): ?>
          <?php if ($item['link']): ?>
            <li>
              <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
            </li>
          <?php endif ?>
        <?php endforeach ?>

      </ul>
    </div>
  <?php endif ?>

  <?php if (($field = get_field('column_5_f', 'option')) && is_array($field['links']) && checkArrayForValues($field['links'])): ?>
  <div class="col-md-4">

    <?php if ($field['title']): ?>
      <div class="footer-title"><?= $field['title'] ?></div>
    <?php endif ?>

    <ul>

      <?php foreach ($field['links'] as $item): ?>
        <?php if ($item['link']): ?>
          <li>
            <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
          </li>
        <?php endif ?>
      <?php endforeach ?>

    </ul>
  </div>
<?php endif ?>

</div>
</nav>
</div>
</div>
<div class="footer-bottom">

  <?php if ($field = get_field('left_fb', 'option')): ?>
    <div class="copyright"><?= $field ?></div>
  <?php endif ?>
  
  <?php if (($field = get_field('right_fb', 'option')) && is_array($field) && checkArrayForValues($field)): ?>
  <ul class="list-inline">

    <?php foreach ($field as $item): ?>
      <?php if ($item['link']): ?>
        <li class="list-inline-item">
          <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
        </li>
      <?php endif ?>
    <?php endforeach ?>
    
    <li class="list-inline-item"><a href="#"><?php _e('Website door', 'Genex') ?></a></li>
    <li class="list-inline-item"><a href="#"><?php _e('The DISTRIKT', 'Genex') ?></a></li>
  </ul>
<?php endif ?>

</div>
</div>
</footer>
</div>

<?php wp_footer() ?>
</body>
</html>