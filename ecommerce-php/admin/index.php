<?php
  $msg ='';

  $display = 'none';
  if(isset($_GET['erro'])==1){
    $msg = 'Faça login para acessar o painel';
    $display = 'block';
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Faça o login como administrador</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>
  <body>
    <div class="container">
      <div id="login">
        <form action="validations/auth.php" method="post">
              <p style="display:<?=$display?>"><?=$msg?></p>
              <div class="form-group">
                <label for="name">Usuario</label>
                <input type="text" id="name" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" class="form-control">
              </div>
              <button type="submit" class="btn btn-custom">Entrar</button>
            </form>
      </div>
    </div>

    <!-- jQuer
    y (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
