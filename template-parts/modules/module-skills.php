<?php
$skillTitle =  get_field('skill-title') ? esc_html(get_field('skill-title')) : "Skills";

$tech = new WP_Query(array(
  'post_type' => 'tech',
));

$lang = new WP_Query(array(
  'post_type' => 'languages',
));

$cant_per_card = 5;
$cant_posts = $tech->found_posts;
?>


<section class="skill">
  <h2 class="skill__title"><?php echo $skillTitle ?></h2>
  <div class="skill__cards">
    <?php

    if ($tech->have_posts()) {
      $cant_per_Card = 6;
      $post_left = $cant_posts;
      $iteration = 0;

      do {
        $oneIfIsFirtsIteration = ($iteration == 0 ? 1 : 0);
        $oneIfNOTIsFirtsIteration = ($iteration != 0 ? 1 : 0);


        $argsTech = array(
          'post_type' => 'tech',
          'offset' => (($cant_per_Card - $oneIfIsFirtsIteration)  * $iteration) - $oneIfNOTIsFirtsIteration,
        );
        $tech = new WP_Query($argsTech);
    ?>
        <div class="skillCard">
          <?php if ($iteration == 0) : ?>
            <h2 class="skillCard__title">Tech</h2>
          <?php endif; ?>
          <div class="skillCard__skillsConteiner">
            <?php
            while ($tech->have_posts()) {
              $tech->the_post();
              if ($tech->current_post < $cant_per_Card - $oneIfIsFirtsIteration) {
                get_template_part('template-parts/components/component', 'skill');
              } else {
                continue;
              }
            }
            wp_reset_postdata();
            ?>
          </div>
        </div>
      <?php
        $iteration++;
        $post_left = $post_left - $cant_per_Card + $oneIfIsFirtsIteration;
      } while ($post_left > 0);
    } else {
      ?>
      <div class="skillCard">
        <h2 class="skillCard__title">Tech</h2>
        <div class="skillCard__skillsConteiner">
          <div class="no_content_found">
            <p>No tech loaded</p>
          </div>
        </div>
      </div>
    <?php } ?>

    <?php if ($lang->have_posts()) : ?>
      <div class="skill__cards">
        <div class="skillCard">
          <h2 class="skillCard__title">Languages</h2>
          <div class="skillCard__skillsConteiner">
            <?php
            while ($lang->have_posts()) {
              $lang->the_post();
              get_template_part('template-parts/components/component', 'skill');
            }
            wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    <?php else : ?>
      <div class="skill__cards">
        <div class="skillCard">
          <h2 class="skillCard__title">Languages</h2>
          <div class="skillCard__skillsConteiner">
            <div class="no_content_found">
              <p>No languages loaded</p>
            </div>
          </div>
        </div>
      </div>
    <?php endif ?>

  </div>
</section>
