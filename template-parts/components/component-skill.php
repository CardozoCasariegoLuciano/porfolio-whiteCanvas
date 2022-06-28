<?php
include_once(get_stylesheet_directory() . '/helpers.php');

$title = get_the_title() ? esc_html(get_the_title()) : "Undefined title";
$img = get_the_post_thumbnail();
?>

<div class="skillCard__item">
  <div class="skillCard__data">
    <div class="skillCard__data--img">
      <?php
      if ($img) {
        echo $img;
      } else {
      ?>
        <img src="<?= get_template_directory_uri(); ?>/assets/icons/tech.png" alt="default tech icon">
      <?php } ?>

    </div>
    <h4 class="skillCard__data--title"><?= $title ?></h4>
  </div>
  <div class="dots">
    <?php add_dots() ?>
  </div>
</div>

