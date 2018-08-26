<?php
  class User extends Conexao{
    private $id, $user, $pass, $logged;


    function login($user, $pass){
      $query = "SELECT * FROM {$this->prefix}users WHERE kr_user='$user' AND kr_pass='$pass'";
      $this->executeSQL($query);
      $this->getUser();
    }
    private function getUser(){
      $currentUser = $this->listarDados();
      $this->id = $currentUser['kr_id'];
      $this->user = $currentUser['kr_user'];
      $this->pass = $currentUser['kr_pass'];
      if ($currentUser) {
        $this->logged = true;
        $_SESSION["id"]=$this->id;
        $_SESSION["username"]=$this->user;
        $_SESSION["password"]=$this->pass;
      }
    }

    public function getLogged(){
      return $this->logged;
    }
  }
 ?>
