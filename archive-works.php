<?php get_header(); ?>

<section class="works">
  <h2 class="works__title works__title--bolder">Works</h2>

  <?php if (have_posts()) : ?>
    <?php
    while (have_posts()) {
      the_post();
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

<?php get_footer(); ?>
