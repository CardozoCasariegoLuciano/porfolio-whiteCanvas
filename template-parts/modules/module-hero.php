<?php
$image = wp_get_attachment_image( get_field('image'), 'full', false, ["class" => 'm-hero__img']);
$title = esc_html(get_field('title'));
$copy = esc_html(get_field('copy'));
$buttonText = esc_html(get_field('button-text'));
$buttonFile = esc_url(get_field('button-file'));
?>
<section class="m-hero">
  <?php echo $image ?>
  <div class="m-hero__texts">
  <h2 class="m-hero__title"><?php echo $title?>  </h2>
    <p class="m-hero__description">
      <?php echo $copy ?>
    </p> 
    <a href="<?php echo $buttonFile?>" download class="ghost-button"><?php echo $buttonText ?></a>
  </div>
</section>
