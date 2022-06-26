<?php get_header(); ?>


 <section class="works">
    <h2 class="works__title works__title--bolder">Works</h2>
    <?php
    while (have_posts()) {
      the_post();
      get_template_part('template-parts/components/component', 'work');
    }
    wp_reset_postdata();
    ?>
</section>


<?php get_footer(); ?>

