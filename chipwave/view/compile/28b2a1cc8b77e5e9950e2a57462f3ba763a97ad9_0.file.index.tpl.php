<?php
/* Smarty version 3.1.31, created on 2017-10-26 20:19:14
  from "C:\xampp\htdocs\dashboard\chipwave\view\homepage\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f227221a9f02_40838854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28b2a1cc8b77e5e9950e2a57462f3ba763a97ad9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\chipwave\\view\\homepage\\index.tpl',
      1 => 1509041949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f227221a9f02_40838854 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Chipwave">
    <meta name="description" content="Chipwave sistemas corporativos, mobile e web">
    <meta name="keywords" content="sites, web, html, php, sistemas, chipwave, hotsites">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/homepage/imagens/favicon.ico" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/homepage/_css/style.css">
    <title>Chipwave</title>
    <!-- bootstrap e jquery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="$<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/homepage/js/main.js">
    <?php echo '</script'; ?>
>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg nav-transparent">
      <div class="col-md-9">
        <a href="index.html" class="navbar-brand">
          <span class="img-logo">Chipwave</span>
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-option" href="#">Link</a>
          </li>
        </ul>
      </nav>
  </body>
</html>
<?php }
}
