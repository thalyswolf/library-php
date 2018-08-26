<?php
/* Smarty version 3.1.31, created on 2018-04-16 02:56:53
  from "C:\xampp\htdocs\dashboard\kraken\view\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ad3f4d5c35870_02356242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5961a0b7c2f7ed5a5e867af7041acfce4f8d2f02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\kraken\\view\\login.tpl',
      1 => 1523840207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad3f4d5c35870_02356242 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/css/login.css" rel="stylesheet">
    <?php echo '<script'; ?>
 type="text/javascript">
      function limpar(){
        document.getElementById("user").value = "";
        document.getElementById("pass").value = "";
      }
    <?php echo '</script'; ?>
>
  </head>
  <body class="background">
    <div class="container">
      <section id="login">
        <form action="" method="post">
          <div class="form-group">
            <input id="noBruteForceAttack" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SESSAO']->value;?>
">
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
<?php }
}
