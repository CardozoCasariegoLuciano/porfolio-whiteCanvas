<?php
include_once(get_stylesheet_directory() . '/helpers.php');
$date = get_field('work-year') ? get_field('work-year') : get_the_date('Y');
$img = get_the_post_thumbnail();
$link = get_the_permalink();
$title = get_the_title() ? esc_html(get_the_title()) : "Default title";
$excerpt = esc_html(get_the_excerpt());
?>

<a href="<?= $link ?>" class="workCard">
  <div class="workCard__content">
    <div class="workCard__imgConteiner">
      <?php
      if ($img) {
        echo $img;
      } else {
      ?>
        <img src="<?= get_template_directory_uri(); ?>/assets/images/default-image.png" alt="default image">
      <?php } ?>
    </div>

    <div class="workCard__texts">
      <h2 class="workCard__title"><?= $title ?></h2>
      <div class="workCard__tags">
        <span class="yearPill"><?= $date ?></span>
        <span class="workCard__tag"> <?php print_Categories() ?></span>
      </div>
      <?php if (has_excerpt()) : ?>
        <p class="workCard__description">
          <?= $excerpt ?>
        </p>
      <?php endif ?>
    </div>
  </div>
</a>
