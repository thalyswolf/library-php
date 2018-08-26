<?php
  require_once('Conta.php');
  require_once('ContaPoupanca.php');
  require_once('ContaCorrente.php');

  //Criação dos objetos
  $contas = array();
  $contas[] = new ContaCorrente(6677, "CC.1234.56", 100, 500);
  $contas[] = new ContaPoupanca(6678, "PP.1234.57", 100);

  //percorre as contas
  foreach ($contas as $key => $conta) {
    print "Conta {$conta->getInfo()}<br>";
    print " Saldo atual: {$conta->getSaldo()}<br>";
    $conta->depositar(200);
    print "Depósito de 200 <br>";
    print " Saldo atual: {$conta->getSaldo()}<br>";

    if ($conta->retirar(700)) {
      print "Retirada de 700 <br>";
    }else{
      print "Retirada de 700 não permitida<br>";
    }
    print " Saldo atual: {$conta->getSaldo()}<br><br>";
  }
 ?>
