<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location:./index.php?erro=2');
  }
  $usuario = $_SESSION['usuario'];
  @$id_usuario = $_SESSION['id'];
  $permissao = $_SESSION['permissao'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Painel do ADM</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript">
      
    </script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <!-- Header -->
        <div class="navbar-header">
          <!-- Botão toggle -->
          <button type="button" class="navbar-toggle collapsed"
          data-toggle="collapse" data-target="#navegacao">
            <span class="sr-only">Alternar navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Logo -->
          <a href="painel.php" class="navbar-brand">
            <p class="txt-logo"><?=$_SESSION['usuario']?></p>
          </a>

        </div> <!-- header -->
        <!-- Navbar -->
        <div class="collapse navbar-collapse" id="navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <?php if ($permissao == 1) {
              echo "<li><a id='cadastrar' href='#'>Cadastrar usuario</a></li>";
            } ?>
            <li><a href="logout.php">Sair</a></li>
          </ul>
        </div>
      </div> <!-- Container -->
    </nav><!-- Nav -->
