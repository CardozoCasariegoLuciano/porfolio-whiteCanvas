<?php

function print_Categories()
{
  $categories = get_the_terms($post->ID, 'work-category');
  if ($categories) {
    foreach ($categories as $key => $value) {
      echo $value->name;

      if ($key < count($categories) - 1) {
        echo ", ";
      }
    }
  }else{
    echo "No category added";
  }
}

function add_dots()
{
  $range = get_field('skill_range');
  $dots = 5;

  for ($i = 0; $i < $dots; $i++) {
    $toprint = '<div class="dot ';

    if ($range > 0) {
      $toprint = $toprint . ' dot--colored';
      $range--;
    }

    $toprint = $toprint . '"></div>';

    echo $toprint;
  }
}
