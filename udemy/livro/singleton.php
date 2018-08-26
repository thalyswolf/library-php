<?php
  require_once('classes/Preferencias.php');

  //obtém uma instância
  $p1 = Preferencias::getInstance();
  print "A linguagem é ".$p1->getData('language')."<br>";
  $p1->setData('language', 'pt');
  print "A linguagem é ".$p1->getData('language')."<br>";

  //obtem a mesma instancia
  $p2 = Preferencias::getInstance();
  print "A linguagem é ".$p2->getData('language')."<br>";

  //grava no File
  $p1->save();
 ?>
