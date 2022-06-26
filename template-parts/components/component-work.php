<?php
include_once( get_stylesheet_directory() . '/helpers.php' );
?>

<a href="<?php the_permalink() ?>" class="workCard">
    <div class="workCard__content">
      <div class="workCard__imgConteiner">
        <?php the_post_thumbnail() ?>
      </div>

      <div class="workCard__texts">
        <h2 class="workCard__title"><?php the_title() ?></h2>
        <div class="workCard__tags">
          <span class="yearPill"><?= get_the_date('Y') ?></span>
          <span class="workCard__tag"> <?php print_Categories() ?></span>
        </div>
        <p class="workCard__description">
          <?= get_the_excerpt() ?>
        </p>
      </div>
    </div>
</a>
