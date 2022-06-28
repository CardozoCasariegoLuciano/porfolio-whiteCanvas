<?php
include_once(get_stylesheet_directory() . '/helpers.php');
$featureTitle =get_field('feature-title') ? esc_html(get_field('feature-title')) : "Last works";

$args = array(
  'post_type' => 'works',
  'posts_per_page' => 3,
);
$works = new WP_Query($args);
?>


<section class="works">
  <h2 class="works__title"><?= $featureTitle ?></h2>

  <?php if ($works->have_posts()) : ?>
    <?php
    while ($works->have_posts()) {
      $works->the_post();
      get_template_part('template-parts/components/component', 'work');
    }
    wp_reset_postdata();
    ?>
  <?php else : ?>
    <div class="no_content_found">
      <p>No Works loaded</p>
    </div>
  <?php endif ?>

</section>
