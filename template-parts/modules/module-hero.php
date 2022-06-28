<?php
$image = wp_get_attachment_image(get_field('image'), 'full', false, ["class" => 'm-hero__img']);
$title = get_field('title') ? esc_html(get_field('title')) : "Default title";
$copy = esc_html(get_field('copy'));
$buttonText = get_field('button-text') ? esc_html(get_field('button-text')) : "Default Button";
$buttonFile = esc_url(get_field('button-file'));
?>
<section class="m-hero">
  <?php
  if ($image) {
    echo $image;
  } else {
  ?>
    <img src="<?= get_template_directory_uri(); ?>/assets/images/default-image.png" class="m-hero__img" alt="default image">
  <?php } ?>

  <div class="m-hero__texts">
    <h2 class="m-hero__title"><?= $title ?> </h2>
    <?php if ($copy) : ?>
      <p class="m-hero__description">
        <?= $copy ?>
      </p>
    <?php endif ?>

    <?php if ($buttonFile) : ?>
      <a href="<?= $buttonFile ?>" download class="ghost-button"><?= $buttonText ?></a>
    <?php endif ?>
  </div>
</section>
