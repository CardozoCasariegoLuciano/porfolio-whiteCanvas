<?php
/* Template Name: About Page*/

get_header();

$argsEducaiton = array(
  'post_type' => 'about',
  'tax_query' => array(
    array(
      'taxonomy' => 'about-category',   // taxonomy name
      'field' => 'slug',
      'terms' => array('education')
    )
  ),
);
$education = new WP_Query($argsEducaiton);

$argsExperience = array(
  'post_type' => 'about',
  'tax_query' => array(
    array(
      'taxonomy' => 'about-category',   // taxonomy name
      'field' => 'slug',
      'terms' => array('experience')
    )
  ),
);
$experience = new WP_Query($argsExperience);

$title = get_the_title() ?  esc_html(get_the_title()) : "Default title";
$content = esc_html(get_the_content());
?>

<section class="about">
  <h2 class="about__title"><?= $title ?></h2>
  <?php if ($content) : ?>
    <div class="about__description"><?php the_content() ?></div>
  <?php endif ?>
</section>

<?php if ($experience->have_posts() || $education->have_posts()) : ?>

  <?php if ($experience->have_posts()) : ?>
    <section class="aboutSection">
      <h5 class="aboutSection__title">Experience</h5>
      <div class="aboutSection__conteiner">
        <?php
        while ($experience->have_posts()) {
          $experience->the_post();
          get_template_part('template-parts/components/component', 'about');
        }
        wp_reset_postdata();
        ?>
      </div>
    </section>
  <?php endif ?>

  <?php if ($education->have_posts()) : ?>
    <section class="aboutSection">
      <h5 class="aboutSection__title">Education</h5>
      <div class="aboutSection__conteiner">
        <?php
        while ($education->have_posts()) {
          $education->the_post();
          get_template_part('template-parts/components/component', 'about');
        }
        wp_reset_postdata();
        ?>
      </div>
    </section>
  <?php endif ?>

<?php else : ?>
  <div class="no_content_found">
    <p>No Education or Experience loaded</p>
  </div>
<?php endif ?>

<?php
get_footer();
?>
