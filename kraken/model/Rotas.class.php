<?php
  class Rotas{

    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';
    public static function getHome(){
      return Config::SITE_URL . '/dashboard/' . Config::SITE_PASTA;
    }

    public static function getSiteRoot(){
      return $_SERVER['DOCUMENT_ROOT'] . '/' .  Config::SITE_PASTA;
    }

    public static function getTemplate(){
      return self::$pasta_view;
    }
    public static function pag_dash(){
      return self::getHome() . '/dash';
    }
    public static function pag_compras(){
      return self::getHome() . '/compras';
    }
    public static function pag_calendar(){
      return self::getHome() . '/calendar';
    }
    static function getPage(){
      if (isset($_GET['pag'])) {
        $pagina = $_GET['pag'];
        self::$pag = explode('/', $pagina);
        $pagina = 'controller/'.self::$pag[0] . '.php';
        if (file_exists($pagina)) {
          include $pagina;
        }else{
          include 'erro.php';
        }
      }else{
        include 'erro.php';
      }
    }
  }
 ?>
