<?php
include_once( get_stylesheet_directory() . '/helpers.php' );
$featureTitle = esc_html(get_field('feature-title'));

$args = array(
  'post_type' => 'works',
  'posts_per_page' => 3,
);
$works = new WP_Query($args);
?>


<section class="works">
  <h2 class="works__title"><?php echo $featureTitle ?></h2>

    <?php
    while ($works->have_posts()) {
      $works->the_post();
      get_template_part('template-parts/components/component', 'work');
    }
    wp_reset_postdata();
    ?>
</section>
