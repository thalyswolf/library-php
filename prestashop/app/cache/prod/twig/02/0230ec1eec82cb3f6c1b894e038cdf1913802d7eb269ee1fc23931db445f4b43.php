<?php

/* __string_template__3fa194d9af73dd04446946e4c98ebcff28d7389f11161c8103a16aa0ed17f582 */
class __TwigTemplate_62e49f0c3ac85432e4fdb5e79f57c8c44ba47ff122493ebd8da3f929d9f42da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/dashboard/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/dashboard/prestashop/img/app_icon.png\" />

<title>Produtos • teste</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'pt';
    var full_language_code = 'pt-pt';
    var full_cldr_language_code = 'pt-PT';
    var country_iso_code = 'BR';
    var _PS_VERSION_ = '1.7.2.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Foi feita uma nova encomenda na sua loja.';
    var order_number_msg = 'Número da encomenda: ';
    var total_msg = 'Total: ';
    var from_msg = 'De: ';
    var see_order_msg = 'Ver esta encomenda';
    var new_customer_msg = 'Um novo cliente registou-se na sua loja.';
    var customer_name_msg = 'Nome do cliente: ';
    var new_msg = 'Foi deixada uma nova mensagem na sua loja.';
    var see_msg = 'Ler esta mensagem';
    var token = '4d03da021ed4d1d203e491332ca826d4';
    var token_admin_orders = 'a021646c9be72e4b44d622822f4278a3';
    var token_admin_customers = 'fa3b0772091b590e5a26788d157d5a82';
    var token_admin_customer_threads = '49262c1ffc25739c1533d790c3b84f80';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'ae46fa0cf2077370cecb933bf57e6380';
    var choose_language_translate = 'Escolher idioma';
    var default_language = '1';
    var admin_modules_link = '/dashboard/prestashop/admin071oae3gn/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=NcKERa_J7nJArx2Kvif8BQpoLy_FEBl9kv9YCTPwI2w';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Atualizado com sucesso';
    var errorLogin = 'O PrestaShop não conseguiu autenticar-se nos Addons. Por favor verifique as suas credenciais e se está ligado à internet.';
    var search_product_msg = 'Pesquisar um produto';
  </script>

      <link href=\"/dashboard/prestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/dashboard/prestashop/admin071oae3gn/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/dashboard/prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/dashboard/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/dashboard/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/dashboard/prestashop/admin071oae3gn/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/dashboard\\/prestashop\\/admin071oae3gn\\/\";
var baseDir = \"\\/dashboard\\/prestashop\\/\";
var currency = {\"iso_code\":\"BRL\",\"sign\":\"R\$\",\"name\":\"Real brasileiro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/dashboard/prestashop/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/dashboard/prestashop/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/dashboard/prestashop/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/dashboard/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/dashboard/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/dashboard/prestashop/admin071oae3gn/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/dashboard/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/dashboard/prestashop/js/admin.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/dashboard/prestashop/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/dashboard/prestashop/js/tools.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/dashboard/prestashop/admin071oae3gn/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/dashboard/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/dashboard/prestashop/admin071oae3gn/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminGamification&token=780478e2af09e94122b6f71f54e1f22c';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminDashboard&amp;token=22a93ab2fa839d5276462bcf6929095a\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Acesso Rápido</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminOrders&amp;token=a021646c9be72e4b44d622822f4278a3\"
                 data-item=\"Encomendas\"
      >Encomendas</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php/module/manage?token=6dd674a1cd4cfc91c35ece2f4092c5d7\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCategories&amp;addcategory&amp;token=4102a6b15cce47ba337d2fadfd086ced\"
                 data-item=\"Nova Categoria\"
      >Nova Categoria</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php/product/new?token=6dd674a1cd4cfc91c35ece2f4092c5d7\"
                 data-item=\"Novo produto\"
      >Novo produto</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1e8095b716fa28fdabfcb4c341afd6b9\"
                 data-item=\"Novo Voucher\"
      >Novo Voucher</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"75\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/catalog\"
        data-post-link=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminQuickAccesses&token=bdeb989d7dab0155b9f6d529ec85a6dd\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"Produtos - Lista\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Adicionar a página atual ao Acesso Rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminQuickAccesses&token=bdeb989d7dab0155b9f6d529ec85a6dd\">
      <i class=\"material-icons\">settings</i>
      Gerir atalhos
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminSearch&amp;token=d046188def2c14066e6ac8632d29973f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Em todo o lado
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Em todo o lado\" href=\"#\" data-value=\"0\" data-placeholder=\"O que procura?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Em todo o lado</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, SKU, referência...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catálogo
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clientes por nome\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nome...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clientes por nome
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clientes por endereço IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clientes por endereço IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Encomendas\" href=\"#\" data-value=\"3\" data-placeholder=\"Nº da Encomenda\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Encomendas
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da Fatura\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Faturas
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Carrinhos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Carrinhos
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome do Módulo\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Módulos
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">PESQUISAR<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/thalyswolf01%40gmail.com.jpg\" /><br>
      <span>Thalys Antonio Wolf Thalyswolf</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminEmployees&amp;token=ae46fa0cf2077370cecb933bf57e6380&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> O seu perfil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminLogin&amp;token=0ae63c58568159e6a851160dbfc0e0ba&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Fechar sessão
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Encomendas<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensagens<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhuma nova encomenda por enquanto :(<br>
              Já consultou a sua taxa de conversão recentemente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Enviou algum e-mail sobre uma aquisição recentemente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Ao que parece, todos os seus clientes estão satisfeitos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/dashboard/prestashop/\" target= \"_blank\">teste</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminDashboard&amp;token=22a93ab2fa839d5276462bcf6929095a\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Painel de controlo</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"2\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminOrders&amp;token=a021646c9be72e4b44d622822f4278a3\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Encomendas
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminOrders&amp;token=a021646c9be72e4b44d622822f4278a3\" class=\"link\"> Encomendas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminInvoices&amp;token=7176240aa801af193dc210fd9b0a82c2\" class=\"link\"> Faturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminSlip&amp;token=1c9cd9a43323e5a7a0877474631a89cb\" class=\"link\"> Notas de Crédito
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminDeliverySlip&amp;token=00fad3bae62e1ae4373419bb08a1e6ae\" class=\"link\"> Notas de Entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCarts&amp;token=70e7b693a63a47b6b2a1e81cdff9903f\" class=\"link\"> Carrinhos de Compras
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/dashboard/prestashop/admin071oae3gn/index.php/product/catalog?_token=NcKERa_J7nJArx2Kvif8BQpoLy_FEBl9kv9YCTPwI2w\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catálogo
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/dashboard/prestashop/admin071oae3gn/index.php/product/catalog?_token=NcKERa_J7nJArx2Kvif8BQpoLy_FEBl9kv9YCTPwI2w\" class=\"link\"> Produtos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCategories&amp;token=4102a6b15cce47ba337d2fadfd086ced\" class=\"link\"> Categorias
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminTracking&amp;token=4d2c892808ce2ca754599575ca9a9244\" class=\"link\"> Monitorização
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminAttributesGroups&amp;token=cca009a28b134b3c273061f10baab7d0\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminManufacturers&amp;token=b11c1215cb308ddf22e8a669158308e3\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminAttachments&amp;token=f830167324df7b6acb0e42adb132d175\" class=\"link\"> Ficheiros
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCartRules&amp;token=1e8095b716fa28fdabfcb4c341afd6b9\" class=\"link\"> Descontos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/dashboard/prestashop/admin071oae3gn/index.php/stock/?_token=NcKERa_J7nJArx2Kvif8BQpoLy_FEBl9kv9YCTPwI2w\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCustomers&amp;token=fa3b0772091b590e5a26788d157d5a82\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clientes
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCustomers&amp;token=fa3b0772091b590e5a26788d157d5a82\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminAddresses&amp;token=e44f18d5f3105171e6e181e480b2f517\" class=\"link\"> Endereços
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCustomerThreads&amp;token=49262c1ffc25739c1533d790c3b84f80\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Apoio ao Cliente
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCustomerThreads&amp;token=49262c1ffc25739c1533d790c3b84f80\" class=\"link\"> Apoio ao Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminOrderMessage&amp;token=f70f31bad7c8b3343782726f1040fbbe\" class=\"link\"> Mensagens de Encomendas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminReturn&amp;token=7e49192b4716d5ea166975a42f3b4282\" class=\"link\"> Mercadorias Devolvidas
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminStats&amp;token=1340872d6052949e486fbb0e945fb833\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Estatísticas
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"42\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"43\">
                  <a href=\"/dashboard/prestashop/admin071oae3gn/index.php/module/catalog?_token=NcKERa_J7nJArx2Kvif8BQpoLy_FEBl9kv9YCTPwI2w\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Módulos
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/dashboard/prestashop/admin071oae3gn/index.php/module/catalog?_token=NcKERa_J7nJArx2Kvif8BQpoLy_FEBl9kv9YCTPwI2w\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminAddonsCatalog&amp;token=6b89831e8e9fe46ebaab4aa1ceedfc1e\" class=\"link\"> Modules Catalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminThemes&amp;token=7131ebbfd3e3d3cd8f75d3f6d9c1a151\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Design
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminThemes&amp;token=7131ebbfd3e3d3cd8f75d3f6d9c1a151\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminThemesCatalog&amp;token=e54e8d0c13883d5d5cee20adeda7a085\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCmsContent&amp;token=dd1198fccb9ac0e654255da8942a275e\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminModulesPositions&amp;token=fead74ce68fc42831b7514d06b2e552f\" class=\"link\"> Posições
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminImages&amp;token=887c95719281da85cee7ccdaa1f29053\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminLinkWidget&amp;token=6bed918a8c1325549b41023f1540219a\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCarriers&amp;token=298cb6cd8a87df2c89221dce072a7e03\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Envio
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCarriers&amp;token=298cb6cd8a87df2c89221dce072a7e03\" class=\"link\"> Transportadoras
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminShipping&amp;token=4b5e0351bf452557dbef82673b7408d7\" class=\"link\"> Preferências
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminPayment&amp;token=36303939a7a6a7e0242a0438241d4eea\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Pagamento
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminPayment&amp;token=36303939a7a6a7e0242a0438241d4eea\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminPaymentPreferences&amp;token=b6811ee38b140470e62bcf73cb24f92e\" class=\"link\"> Preferências
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminLocalization&amp;token=95d1b80eec8125b5083224aeb06d9b9f\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminLocalization&amp;token=95d1b80eec8125b5083224aeb06d9b9f\" class=\"link\"> Localização
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCountries&amp;token=16f70524288f0d625d47b312b849ec10\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminTaxes&amp;token=f48622fb558bf6ab0332d022a1102a18\" class=\"link\"> IVA
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminTranslations&amp;token=561ae82c5e4c7e3871bb11c873ad293b\" class=\"link\"> Traduções
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminPreferences&amp;token=395694d65f1f271e45810135b2a1e82f\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Shop Parameters
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminPreferences&amp;token=395694d65f1f271e45810135b2a1e82f\" class=\"link\"> Geral
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminOrderPreferences&amp;token=1c28190885f24a4daeeb291a4f552f46\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminPPreferences&amp;token=72f17305b78f49bb68ac6b1a93cb54ce\" class=\"link\"> Produtos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCustomerPreferences&amp;token=4bebe645a50a0aa14ce953de1cccbf60\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminContacts&amp;token=c1ed9225413d7ddf24e9eb8da2b99eb2\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminMeta&amp;token=5c6da374ab032772df3363b0c41cdc8b\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminSearchConf&amp;token=4f66442b4b33ee8c7b1ecf93fe400cfe\" class=\"link\"> Pesquisar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminGamification&amp;token=780478e2af09e94122b6f71f54e1f22c\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminInformation&amp;token=04c2857c087d9b7f3b211ae9bdcc7b1c\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Parâmetros Avançados
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminInformation&amp;token=04c2857c087d9b7f3b211ae9bdcc7b1c\" class=\"link\"> Informação
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminPerformance&amp;token=09979b52134403e00ada78804349ecbd\" class=\"link\"> Desempenho
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminAdminPreferences&amp;token=e73b6b3931da4a59538226fc2cdcf385\" class=\"link\"> Administração
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminEmails&amp;token=188bbcc29dd4c1970755d1724be107af\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminImport&amp;token=f78b799f9b376af2590b301dec79215b\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminEmployees&amp;token=ae46fa0cf2077370cecb933bf57e6380\" class=\"link\"> Empregados
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminRequestSql&amp;token=d00e4efee31139b63e78985075d47123\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminLogs&amp;token=4ed95e1189dca8c81dd93d10e59ea1d9\" class=\"link\"> Registos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminWebservice&amp;token=c652bfb78afd58ee7d37267c3379fd54\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
<div class=\"onboarding-navbar\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Launch your shop!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resume</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Stop the OnBoarding</a>
  </div>
</div>

</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminCatalog&amp;token=94aa6d27a1c6b61c1873be309068dcb3\">Catálogo</a>
                  </li>
      
              <li>
                      <a href=\"/dashboard/prestashop/admin071oae3gn/index.php/product/catalog?_token=NcKERa_J7nJArx2Kvif8BQpoLy_FEBl9kv9YCTPwI2w\">Produtos</a>
                  </li>
      
    </ol>
  

  
    <h2 class=\"title\">
      Produtos    </h2>
  

  
    <div class=\"toolbar-icons\">
                                      
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add\"
            href=\"/dashboard/prestashop/admin071oae3gn/index.php/product/new?_token=NcKERa_J7nJArx2Kvif8BQpoLy_FEBl9kv9YCTPwI2w\"            title=\"Crie um novo produto: CTRL+P\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">add_circle_outline</i>
            <span class=\"title\">Novo produto</span>
          </a>
                            
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/dashboard/prestashop/admin071oae3gn/index.php/module/catalog?_token=NcKERa_J7nJArx2Kvif8BQpoLy_FEBl9kv9YCTPwI2w\"          title=\"Módulos e Serviços Recomendados\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Módulos e Serviços Recomendados</span>
        </a>
            
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Ajuda\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/dashboard/prestashop/admin071oae3gn/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fpt%252Fdoc%252FAdminProducts%253Fversion%253D1.7.2.2%2526country%253Dpt/Ajuda?_token=NcKERa_J7nJArx2Kvif8BQpoLy_FEBl9kv9YCTPwI2w\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Ajuda</span>
          </a>
                  </div>
  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PT&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pt/login?email=thalyswolf01%40gmail.com&amp;firstname=Thalys+Antonio+Wolf&amp;lastname=Thalyswolf&amp;website=http%3A%2F%2Flocalhost%2Fdashboard%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PT&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/dashboard/prestashop/admin071oae3gn/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Não tem uma conta criada?</h4>
\t\t\t\t\t\t<p class='text-justify'>Descubra as vantagens do PrestaShop Addons! Explore o «marketplace» oficial do PrestaShop e encontre mais de 3500 módulos inovadores e temas-gráficos que o ajudam a otimizar as taxas de conversão de visitas em vendas, aumentar o tráfego na loja, aumentar a fidelidade dos clientes e maximizar o seu nível de produtividade</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Ligue-se ao PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/pt/forgot-your-password\">Esqueci-me da minha palavra-passe</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pt/login?email=thalyswolf01%40gmail.com&amp;firstname=Thalys+Antonio+Wolf&amp;lastname=Thalyswolf&amp;website=http%3A%2F%2Flocalhost%2Fdashboard%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PT&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCriar uma conta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Entrar
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuar</button>
  <a class=\"onboarding-button-shut-down\">Skip this tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"\\n<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Welcome to your shop!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hi! My name is Preston and I'm here to show you around.<\\/p>\\n    <p>You will discover a few essential steps before you can launch your shop:\\n    Create your first product, customize your shop, configure shipping and payments...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Let's get started!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Later<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Start<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php?controller=AdminDashboard\"}]},{\"title\":\"Let's create your first product\",\"subtitle\":{\"1\":\"What do you want to tell about it? Think about what your customers want to know.\",\"2\":\"Add clear and attractive information. Don't worry, you can edit it later :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Give your product a catchy name.\",\"options\":[\"savepoint\"],\"page\":[\"index.php\\/product\\/new\",\"index.php\\/product\\/form\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Fill out the essential details in this tab. The other tabs are for more advanced information.\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Add one or more pictures so your product looks tempting!\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"How much do you want to sell it for?\",\"page\":\"index.php\\/product\\/form\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yay! You just created your first product. Looks good, right?\",\"page\":\"index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Give your shop its own identity\",\"subtitle\":{\"1\":\"How do you want your shop to look? What makes it so special?\",\"2\":\"Customize your theme or choose the best design from our theme catalog.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"A good way to start is to add your own logo here!\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminThemes\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"If you want something really special, have a look at the theme catalog!\",\"page\":\"index.php?controller=AdminThemesCatalog\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Ponha a sua loja pronta para pagamentos\",\"subtitle\":{\"1\":\"How do you want your customers to pay you?\",\"2\":\"Adapt your offer to your market: add the most popular payment methods for your customers!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"These payment methods are already available to your customers.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"And you can choose to add other payment methods from here!\",\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Choose your shipping solutions\",\"subtitle\":{\"1\":\"How do you want to deliver your products?\",\"2\":\"Select the shipping solutions the most likely to suit your customers! Create your own carrier or add a ready-made module.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Here are the shipping methods available on your shop today.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"You can offer more delivery options by setting up additional carriers\",\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Improve your shop with modules\",\"subtitle\":{\"1\":\"Add new features and manage existing ones thanks to modules.\",\"2\":\"Some modules are already pre-installed, others may be free or paid modules - browse our selection and find out what is available!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Discover our module selection in the first tab. Manage your modules on the second one and be aware of notifications in the third tab.\",\"options\":[\"savepoint\"],\"page\":\"index.php\\/module\\/catalog\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"\\n<div id=\\\"onboarding-welcome\\\" class=\\\"modal-header\\\">\\n  <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n  <h2 class=\\\"text-center text-md-center\\\">Over to you!<\\/h2>\\n  <p class=\\\"text-center text-md-center\\\">\\n    You've seen the essential, but there's a lot more to explore.<br \\/>\\n    Some ressources can help you go further:\\n  <\\/p>\\n  <div class=\\\"container-fluid\\\">\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n          <div class=\\\"starter-guide\\\"><\\/div>\\n          <span class=\\\"link\\\">Starter Guide<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n          <div class=\\\"forum\\\"><\\/div>\\n          <span class=\\\"link\\\">F\\u00f3rum<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"training\\\"><\\/div>\\n          <span class=\\\"link\\\">Forma\\u00e7\\u00e3o<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"video-tutorial\\\"><\\/div>\\n          <span class=\\\"link\\\">Video tutorial<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n  <\\/div>\\n  <br \\/>\\n  <div class=\\\"text-center text-md-center\\\">\\n      <button class=\\\"btn btn-primary onboarding-button-next\\\">I'm ready<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/product\\/catalog\"}]}]}, 1, \"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminWelcome&token=32d1d2b21a270264ebdf80c6c1accf7c\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hey! Are you lost?</p>    <p>To continue, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuar</button>    </div>    <p>If you want to stop the tutorial for good, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quit the Welcome tutorial</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Passo <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Próximo</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1228
        $this->displayBlock('content_header', $context, $blocks);
        // line 1229
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1230
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1231
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1232
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"m-t-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"m-t-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"m-t-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/dashboard/prestashop/admin071oae3gn/index.php?controller=AdminDashboard&amp;token=22a93ab2fa839d5276462bcf6929095a\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Voltar
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Tempo de carregamento: \"></i> 14.512s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contacto
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Reportar Erros
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Fórum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-PT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formação
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PT&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pt/login?email=thalyswolf01%40gmail.com&amp;firstname=Thalys+Antonio+Wolf&amp;lastname=Thalyswolf&amp;website=http%3A%2F%2Flocalhost%2Fdashboard%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PT&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/dashboard/prestashop/admin071oae3gn/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Não tem uma conta criada?</h4>
\t\t\t\t\t\t<p class='text-justify'>Descubra as vantagens do PrestaShop Addons! Explore o «marketplace» oficial do PrestaShop e encontre mais de 3500 módulos inovadores e temas-gráficos que o ajudam a otimizar as taxas de conversão de visitas em vendas, aumentar o tráfego na loja, aumentar a fidelidade dos clientes e maximizar o seu nível de produtividade</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Ligue-se ao PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/pt/forgot-your-password\">Esqueci-me da minha palavra-passe</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pt/login?email=thalyswolf01%40gmail.com&amp;firstname=Thalys+Antonio+Wolf&amp;lastname=Thalyswolf&amp;website=http%3A%2F%2Flocalhost%2Fdashboard%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PT&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCriar uma conta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Entrar
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1397
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1228
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1229
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1230
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1231
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1397
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__3fa194d9af73dd04446946e4c98ebcff28d7389f11161c8103a16aa0ed17f582";
    }

    public function getDebugInfo()
    {
        return array (  1476 => 1397,  1471 => 1231,  1466 => 1230,  1461 => 1229,  1456 => 1228,  1447 => 84,  1439 => 1397,  1272 => 1232,  1269 => 1231,  1266 => 1230,  1263 => 1229,  1261 => 1228,  113 => 84,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__3fa194d9af73dd04446946e4c98ebcff28d7389f11161c8103a16aa0ed17f582", "");
    }
}
