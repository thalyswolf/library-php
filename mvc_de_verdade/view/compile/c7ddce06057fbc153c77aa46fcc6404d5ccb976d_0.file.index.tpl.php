<?php
/* Smarty version 3.1.31, created on 2017-10-22 20:37:30
  from "C:\xampp\htdocs\dashboard\mvc_de_verdade\view\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ece56a83ce71_29158797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7ddce06057fbc153c77aa46fcc6404d5ccb976d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\mvc_de_verdade\\view\\index.tpl',
      1 => 1508697447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ece56a83ce71_29158797 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/template/css/shop-homepage.css" rel="stylesheet">

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
              <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">Carrinho</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">Minha conta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Contato</a>
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
                <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home</a>
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
              <?php 
                Rotas::get_pagina();
              ?>
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
        <h4><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h4>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/template/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/template/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/template/contatos/contatos.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/template/contatos/contatos.js"><?php echo '</script'; ?>
>
  </body>

</html>
<?php }
}
