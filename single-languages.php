<?php
get_header();

function add_dots(){
  $range = get_field('skill_range');
  $dots = 5;

  for ($i = 0; $i < $dots; $i++) {
    $toprint ='<div class="dot ';

      if($range > 0){
        $toprint = $toprint . ' dot--colored';
        $range--;
      }

      $toprint = $toprint . '"></div>';

      echo $toprint;
    }
}
?>

<div class="skill__cards">
  <div class="skillCard">

      <div class="skillCard__item">
        <div class="skillCard__data">
          <div class="skillCard__data--img"></div>
          <h4 class="skillCard__data--title"><?php the_title() ?></h4>
        </div>
        <div class="dots">
            <?php add_dots() ?>
        </div>
      </div>

  </div>
</div>


<?php
get_footer();
?>
