<?php
  class Rotas{

    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';
    public static function getHome(){
      return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }
    public static function getSiteRoot(){
      return $_SERVER['DOCUMENT_ROOT'] . '/' .  Config::SITE_PASTA;
    }
    public static function getTemplate(){
      return self::$pasta_view;
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

    static function getPageNotific(){
      $pagina = "notific";
      self::$pag = explode('/', $pagina);
      $pagina = 'controller/'.self::$pag[0] . '.php';
      include $pagina;
    }
    public static function pag_dash(){
      return self::getHome() . '/dash';
    }

    public static function pag_agendar(){
      return self::getHome() . '/agendar';
    }
    public static function pag_configs(){
      return self::getHome() . '/configs';
    }
    public static function pag_notific(){
      return self::getHome() . '/notific';
    }
    public static function pag_relatorio(){
      return self::getHome() . '/relatorio';
    }
    public static function pag_retorno(){
      return self::getHome() . '/retorno';
    }
    public static function pag_login(){
      return self::getHome() . '/login';
    }
  }
 ?>
