<?php
  require_once('classes/Produto.php');
  require_once('classes/Caracteristica.php');

  //Criação do Objeto
  $p1 = new Produto('Chocolate', 10, 7);

  //Composição
  $p1->addCaracteristica('cor','branco');
  $p1->addCaracteristica('peso','20kg');
  $p1->addCaracteristica('Potência','200 watts');
  $p1->addCaracteristica('idade','200 anos');
  print "Produto: ".$p1->getDescricao(). "<br>\n";
  foreach ($p1->getCaracteristicas() as $c) {
    print "Nome: ".$c->getNome()." - ".$c->getValor()."<br>";
  }
 ?>
