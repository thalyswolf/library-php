<?php
  require_once ('classes/ContaCorrente.php');
  class ContaCorrenteEspecial extends ContaCorrente{
    public function retirar($quantia){ // esse método causa error pq não consegue sobre escrever o outro método
      $this->saldo -= $quantia;
    }
  }
 ?>
