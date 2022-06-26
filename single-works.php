<?php
  get_header();
  include_once( get_stylesheet_directory() . '/helpers.php' );
?>

 <section class="work-header">
      <h2 class="work-header__title"><?php the_title() ?></h2>

      <div class="work-header__tags">
        <span class="yearPill"><?= get_the_date('Y') ?></span>
        <span class="work-header__tag"><?php print_Categories() ?></span>
      </div>

      <p class="work-header__description">
        <?= get_the_excerpt() ?>
      </p>
    </section>

    <section class="work">
      <?php the_content() ?>
    </section>
</section>



<?php
get_footer();
