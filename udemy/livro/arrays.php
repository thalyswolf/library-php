<?php
  $string = '10/10/1996';
  echo "Explode";
  $array = explode('/',$string);
  print_r($array);

  echo "implode";
  print implode('-',$array);
 ?>
