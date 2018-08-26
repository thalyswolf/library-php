<?php
    $servidor = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'receitas';

    $mysqli = new mysqli($servidor, $user, $password, $database);
    if(mysqli_connect_errno()){
        die('Não foi possível conectar-se ao banco de dados: '.mysqli_connect_error());
        exit();
    }
?>