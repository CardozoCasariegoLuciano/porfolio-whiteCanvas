<?php
$title = get_the_title() ? esc_html(get_the_title()) : "No title setted";
$init_date = esc_html(get_field('about_init'));
$end_date = esc_html(get_field('about_end'));
?>


<div class="aboutSection__item">
  <h3 class="aboutSection__item--title"><?= $title ?></h3>
  <?php if ($init_date) : ?>
    <p class="aboutSection__item--date">
      <span><?= $init_date ?></span> |
      <span>
        <?php
        if ($end_date) {
          echo $end_date;
        } else {
          echo "Today";
        }
        ?>
      </span>
    </p>
  <?php endif ?>

  <?php if (get_the_content()) : ?>
    <div class="aboutSection__item--description">
      <?php the_content() ?>
    </div>
  <?php endif ?>
</div>
