<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{$TITLE}</title>

    <!-- Bootstrap core CSS -->
    <link href="{$GET_TEMA}/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{$GET_TEMA}/template/css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{$GET_HOME}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{$PAG_CARRINHO}">Carrinho</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{$PAG_MINHACONTA}">Minha conta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{$PAG_CONTATO}">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="row">
      <div class="col-lg-3">
      </div>
      <div class="col-lg-9">
          <div class="row">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link active" href="{$GET_HOME}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Info</a>
              </li>
            </ul>
          </div>
      </div>
    </div>
      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Shop Name</h1>
          <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
          <div class="row">
            <div class="container">
              {php}
                Rotas::get_pagina();
              {/php}
            </div>
          </div>


        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark" style="">
      <div class="container">
        <h4>{$TITLE}</h4>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{$GET_TEMA}/template/vendor/jquery/jquery.min.js"></script>
    <script src="{$GET_TEMA}/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{$GET_TEMA}/template/contatos/contatos.css">
    <script src="{$GET_TEMA}/template/contatos/contatos.js"></script>
  </body>

</html>
