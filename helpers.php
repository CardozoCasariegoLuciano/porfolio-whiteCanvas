<?php

  function print_Categories(){
    $categories = get_the_category();
    if ($categories) {

      foreach ($categories as $key => $value) {
        echo $value->name;

        if($key < count($categories) -1){
          echo ", ";
        }
      }
    }
  }
