<?php
get_header();
include_once(get_stylesheet_directory() . '/helpers.php');

$title = get_the_title() ? esc_html(get_the_title()) : "Default title";
$date = get_field('work-year') ? get_field('work-year') : get_the_date('Y');
$content = get_the_content();
$excerpt = get_the_excerpt() ? esc_html(get_the_excerpt()) : false;

?>

<section class="work-header">
  <div class="work-header__map">
    <a href=".." class="work-header__map--root">Works</a>
    <span class="work-header__map--separator">></span>
    <?= $title ?>
  </div>
  <h2 class="work-header__title"><?= $title ?></h2>

  <div class="work-header__tags">
    <span class="yearPill"><?= $date ?></span>
    <span class="work-header__tag"><?php print_Categories() ?></span>
  </div>

  <?php if (has_excerpt()) : ?>
    <p class="work-header__description">
      <?= $excerpt ?>
    </p>
  <?php endif ?>
</section>

<?php if ($content) : ?>
  <section class="work">
    <?php the_content() ?>
  </section>
<?php endif ?>


<?php
get_footer();
