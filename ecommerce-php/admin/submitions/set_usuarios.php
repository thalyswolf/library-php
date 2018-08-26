<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location:./index.php?erro=2');
}
require_once('../includes/db.class.php');

$usario_id = $_SESSION['id_usuario'];
$nome = addslashes($_POST['name']);
$cpf = addslashes($_POST['cpf']);
$rg = addslashes($_POST['rg']);
$nasc = addslashes($_POST['nasc']);
$endereco = addslashes($_POST['endereco']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['password']);
$permissao = addslashes($_POST['permissao']);
$sql = "INSERT INTO pessoas(nome, cpf, rg, data_nasc, endereco, telefone, email) VALUES ('$nome', '$cpf', '$rg', '$nasc', '$endereco','$telefone','$email');";

$objDb = new Db();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);
$sql = "INSERT INTO administradores(id_pessoa, usuario, senha, permissao_id) VALUES (LAST_INSERT_ID(), '$usuario', '$senha', $permissao)";
$resultado_id = mysqli_query($link, $sql);

$sql = "INSERT INTO log (descricao, responsavel_id) VALUES ('Cadastrou um novo usuario', $usario_id)";
$resultado_id =mysqli_query($link, $sql);
header('Location: ../painel.php');
 ?>
