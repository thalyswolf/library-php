<?php /*%%SmartyHeaderCode:3135759c6ae88d79932-26912147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1506191700,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '3135759c6ae88d79932-26912147',
  'variables' => 
  array (
    'urls' => 0,
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6ae88ee3183_87050587',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6ae88ee3183_87050587')) {function content_59c6ae88ee3183_87050587($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/dashboard/prestashop/br/a-minha-conta" rel="nofollow">
      A sua conta
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">A sua conta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/dashboard/prestashop/br/nota-de-encomenda" title="Créditos" rel="nofollow">
            Créditos
          </a>
        </li>
            <li>
          <a href="http://localhost/dashboard/prestashop/br/enderecos" title="Endereços" rel="nofollow">
            Endereços
          </a>
        </li>
            <li>
          <a href="http://localhost/dashboard/prestashop/br/identidade" title="Informação pessoal" rel="nofollow">
            Informação pessoal
          </a>
        </li>
            <li>
          <a href="http://localhost/dashboard/prestashop/br/historico-de-encomendas" title="Pedidos" rel="nofollow">
            Pedidos
          </a>
        </li>
        
	</ul>
</div>
<?php }} ?>
