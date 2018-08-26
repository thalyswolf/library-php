<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location:./index.php?erro=2');
  }
  require_once('../includes/db.class.php');
  $id = $_GET['id'];
  $sql = "SELECT * FROM clientes AS c LEFT JOIN pessoas AS p ON(c.id_pessoa = p.id) WHERE c.id = $id";
  $objDb = new Db();
  $link = $objDb->conecta_mysql();

  $resultado_id = mysqli_query($link, $sql);
  if($resultado_id){
    $dados_usuario = mysqli_fetch_array($resultado_id);
    $nome = $dados_usuario['nome'];
    $cpf = $dados_usuario['cpf'];
    $rg = $dados_usuario['rg'];
    $nasc = $dados_usuario['data_nasc'];
    $endereco = $dados_usuario['endereco'];
    $telefone = $dados_usuario['telefone'];
    $email = $dados_usuario['telefone'];
  }else{
    echo "Erro ao consultar os dados do comprador";
  }
 ?>
 <table class="table table-striped table-bordered table-condensed">
   <tr class="dark">
     <td>Nome</td>
     <td><?=$nome?></td>
   </tr>
   <tr class="dark">
     <td>CPF</td>
     <td><?=$cpf?></td>
   </tr>
   <tr class="dark">
     <td>RG</td>
     <td><?=$rg?></td>
   </tr>
   <tr class="dark">
     <td>Nascimento</td>
     <td><?=$nasc?></td>
   </tr>
   <tr class="dark">
     <td>Endereço</td>
     <td><?=$endereco?></td>
   </tr>
   <tr class="dark">
     <td>Telefone</td>
     <td><?=$telefone?></td>
   </tr>
   <tr class="dark">
     <td>E-mail</td>
     <td><?=$email?></td>
   </tr>
 </table>
