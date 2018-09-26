<?php
class Usuario extends Sql{
  public function __construct(){

  }
   public function save($nome, $senha, $nivel){
      self::update("INSERT INTO usuario (nome, senha, nivel) VALUES (:NOME, :SENHA, :NIVEL)", array(
        ":NOME" => $nome,
        ":SENHA" => $senha,
        ":NIVEL" => $nivel
      ));
   }
   public function auth($nome, $senha, $nivel){
      $this->update("INSERT INTO usuario (nome, senha, nivel) VALUES (:NOME, :SENHA, :NIVEL)", array(
        ":NOME" => $nome,
        ":SENHA" => $senha,
        ":NIVEL" => $nivel
      ));
   }
}

 ?>
