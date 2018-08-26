<?php
  class Pessoa{
    public $nome;

    function correr(){

    }
    function __construct($parametro_nome){
      echo "Construtor iniciado";
      $this->nome = $parametro_nome;
    }

    function __destruct(){
      echo "Objeto removido";
    }
  }

  $pessoa = new Pessoa('Thalys');
  echo $pessoa->nome;
 ?>
