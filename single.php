<?php
get_header();
?>

<div class="single">
  <article>
    <h1><?php the_title() ?></h1>
    <div><?php the_content() ?></div>
    <span><?= get_the_date() ?></span>
  </article>
</div>

<?php
get_footer();
?>
