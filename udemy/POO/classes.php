<?php
  class Pessoa{
    //Atributos
    var $nome;


    //Métodos
    function setNome($nome_definido){
      $this -> nome = $nome_definido;
    }

    function getNome(){
      return $this->nome;
    }
  }


  $pessoa = new Pessoa();
  $pessoa->setNome('Thalys');

  echo $pessoa->getNome();
 ?>
