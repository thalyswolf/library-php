<?php
$remove_acento = function($str){
  $a = array('À','Á','É','é');
  $b = array('A','A','E','e');

  return str_replace($a, $b, $str);
};
  print $remove_acento('José da conceicao');
  print "<br>" . PHP_EOL;
  $palavras = array();
  $palavras[] = 'josé';
  $palavras[] = 'café';
  $palavras[] = 'éééé';
  $r = array_map($remove_acento, $palavras);

  print_r($r);
 ?>
