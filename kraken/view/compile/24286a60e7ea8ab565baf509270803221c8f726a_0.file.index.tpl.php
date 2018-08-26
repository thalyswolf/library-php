<?php
/* Smarty version 3.1.31, created on 2018-04-15 23:49:08
  from "C:\xampp\htdocs\dashboard\kraken\view\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ad3c8d4f29d17_84144726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24286a60e7ea8ab565baf509270803221c8f726a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\kraken\\view\\index.tpl',
      1 => 1523828759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad3c8d4f29d17_84144726 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 - Dashboard</title>
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
    <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
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
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAS']->value;?>
">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Compras</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES']->value;?>
">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Clientes</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_FINANCEIRO']->value;?>
">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Financeiro</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_ESTOQUE']->value;?>
">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Estoque</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Produtos</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Marketing</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Administração</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Suporte</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CALENDAR']->value;?>
">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Calendário</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">DHO</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Gestão de pessoas</a>
            </li>
            <li>
              <a href="register.html">Page2</a>
            </li>
            <li>
              <a href="forgot-password.html">page3</a>
            </li>
            <li>
              <a href="blank.html">Blank Page</a>
            </li>
          </ul>
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
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
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
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Sair</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid" style="padding-left:20px">
      <?php 
        Rotas::getPage();
      ?>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Thalys Wolf 2018</small>
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
            <h5 class="modal-title" id="exampleModalLabel">Sair do Kraken?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione sair para encerrar sua sessão</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="logout.php">Sair</a>
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
