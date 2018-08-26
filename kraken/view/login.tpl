<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{$TITLE}</title>
    <!-- Bootstrap core CSS-->
    <link href="{$GET_TEMPLATE}/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{$GET_TEMPLATE}/template/css/login.css" rel="stylesheet">
    <script type="text/javascript">
      function limpar(){
        document.getElementById("user").value = "";
        document.getElementById("pass").value = "";
      }
    </script>
  </head>
  <body class="background">
    <div class="container">
      <section id="login">
        <form action="" method="post">
          <div class="form-group">
            <input id="noBruteForceAttack" name="id" type="hidden" value="{$SESSAO}">
            <label for="user">Usuário</label>
            <input type="text" class="form-control" name="user" id="user" aria-describedby="usuarioHelp" placeholder="Digite seu usuário">
            <small id="usuarioHelp" class="form-text text-muted">Caso não saiba seu usuário entre em contato com os desenvolvedores</small>
          </div>
          <div class="form-group">
            <label for="pass">Senha</label>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Digite a senha">
          </div>
          <button type="submit" class="btn btn-primary">Entrar</button>
          <button type="button" id="apagar" class="btn btn-danger" onclick="limpar()">Apagar</button>
        </form>
      </section>
    </div>
  </body>
</html>
