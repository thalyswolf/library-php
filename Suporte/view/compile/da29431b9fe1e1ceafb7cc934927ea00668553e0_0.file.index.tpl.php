<?php
/* Smarty version 3.1.32, created on 2018-06-29 21:47:34
  from 'C:\xammpp7\htdocs\website\Suporte\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b368cd6dbcf95_10179126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da29431b9fe1e1ceafb7cc934927ea00668553e0' => 
    array (
      0 => 'C:\\xammpp7\\htdocs\\website\\Suporte\\view\\index.tpl',
      1 => 1530301651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b368cd6dbcf95_10179126 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_DASH']->value;?>
">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_AGENDAR']->value;?>
">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Agendar</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIGS']->value;?>
">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Configurações</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_RELATORIO']->value;?>
">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Relatorio</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO']->value;?>
">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Retorno</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <?php 
              Rotas::getPageNotific();
            ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DASH']->value;?>
">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Página atual</li>
      </ol>
      <?php 
        Rotas::getPage();
      ?>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <!-- Core plugin JavaScript-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>
    <!-- Page level plugin JavaScript-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/vendor/chart.js/Chart.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/vendor/datatables/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/vendor/datatables/dataTables.bootstrap4.js"><?php echo '</script'; ?>
>
    <!-- Custom scripts for all pages-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/sb-admin.min.js"><?php echo '</script'; ?>
>
    <!-- Custom scripts for this page-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/sb-admin-datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/sb-admin-charts.min.js"><?php echo '</script'; ?>
>
  </div>
</body>

</html>
<?php }
}
