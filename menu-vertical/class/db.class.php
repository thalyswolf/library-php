<?php
  class db{
    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $database = 'curso';
    public function conecta_mysql(){
      $con = mysqli_connect($this->host, $this->usuario, $this->senha,$this->database);
      mysqli_set_charset($con, 'utf8');
      if(mysqli_connect_errno()){
        echo 'houve erro ao se conectar ao banco de dados '. mysqli_connect_error();
      }
      return $con;
    }
  }
 ?>
