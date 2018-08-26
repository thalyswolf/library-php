<?php
  $contato = (isset($_GET['contato'])?true:false);
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfólio</title>
    <link rel="icon" href="imagens/icon.png">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" media="screen" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparent">
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
          <a href="index.html" class="navbar-brand">
            <p class="txt-logo">Thalys A. Wolf</p>
          </a>

        </div> <!-- header -->
        <!-- Navbar -->
        <div class="collapse navbar-collapse" id="navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home">Home</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#trabalho">Trabalho</a></li>
            <li><a href="#contato">Contato</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>
      </div> <!-- Container -->
    </nav><!-- Nav -->

    <div class="home" id="home">
      <div class="texto-home">
        <h1>Meu portifólio online</h1>
        <a href="#contato" class="btn btn-custom btn-home">Contato</a>
        <a href="#" class="btn btn-custom btn-home">Blog</a>
      </div>
    </div>

    <section id="sobre">
      <div class="fundo-sobre">
        <div class="container">
          <div class="col-sm-6">
            <h1>Quem sou?</h1>
            <h2>Sobre mim</h2>
            <p>Thalys Antônio Wolf é técnico em informática pelo CEDUP-Timbó, apaixonado por desenvolver sistemas web e mobile, conhecimento diverso na área de técnologia com experiência em suporte e desenvolvimento.</p>
            <h2>Formação acadêmica</h2>
            <p>Técnico em informática pelo CEDUP-Timbó.</p>
            <h2>Habilidades profissionais</h2>
            <p>HTML5, CSS3, Bootstrap, Ajax, PHP, POO, Javascript, JQuery, Angular, Ionic Framework, PWA, Web Services, UML, Redes e algum conhecimento em Linux.</p>
          </div>

          <div class="col-sm-6">
            <div class="row visible-lg-block visible-md-block">
              <div class="col-md-6">
                <img src="imagens/img1.jpg" class="img-responsive">
              </div>
              <div class="col-md-6" class="visible-lg-block">
                <img src="imagens/img1.jpg" class="img-responsive">
              </div>
              <div class="col-md-6">
                <img src="imagens/img1.jpg" class="img-responsive">
              </div>
              <div class="col-md-6">
                <img src="imagens/img1.jpg" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
      <div>
    </section>
    <section id="trabalho">
      <div class="container">
        <h1>Um pouco mais sobre meu trabalho</h1>
        <div class="job" style="border:2px solid red;height:500px;">
          <h1>aqui vai em slideshow louco</h1>

        </div>
      </div>
    </section>
    <section id="contato">
      <div class="container">
        <div class="col-sm-6">
          <img src="imagens/icone-contato.png" class="img-responsive">
        </div>
        <div class="col-sm-6">
          <h1>Contato</h1>
          <?php
            if ($contato) {
              echo "<p style='font-size:20px;color:black;'><b>Sua mensagem foi enviada, em breve responderei</b></p>";
            }
          ?>
          <form action="enviar.php" method="post">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" id="nome" name="nome" class="form-control">
            </div>

            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
              <label for="msg">Deixe sua mensagem</label>
              <input type="text" id="msg" name="msg" class="form-control" maxlength="140">
            </div>
            <button type="submit" class="btn btn-custom">Enviar</button>
          </form>
        </div>
      </div>
    </section>
    <footer id="rodape">
      <div class="container">
        <div class="col-md-7">
          <blockquote>
            "Não conseguimos resolver um problema com base no mesmo raciocínio usado para criá-lo." (Albert Einstein)
          </blockquote>
        </div>
        <div class="col-md-5">
          <ul class="nav">
            <li class="item-rede-social"><a href="https://www.facebook.com/thalys.wolf"><img src="imagens/facebook.png" alt=""></a></li>
            <li class="item-rede-social"><a href="https://twitter.com/thalys_wolf"><img src="imagens/twitter.png" alt=""></a></li>
            <li class="item-rede-social"><a href="https://www.instagram.com/thalyswolf1"><img src="imagens/instagram.png" alt=""></a></li>
            <li class="item-rede-social"><a href="https://www.linkedin.com/in/thalys-wolf-03837561/"><img src="imagens/linkedin.png" alt=""></a></li>
            <li class="item-rede-social"><a href="https://github.com/thalyswolf"><img src="imagens/github.png" alt=""></a></li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- jQuer
    y (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
