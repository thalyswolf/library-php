<?php
  class Software{
    private $id;
    private $nome;
    private static $contador;

    function __construct($nome){
        self::$contador++;
        $this->id = self::$contador;
        $this->nome = $nome;
        print "Software {$this->id} - nome {$this->nome} <br>";
    }

    public static function getContador(){
      return self::$contador;
    }
}

new Software('dia');
new Software('gimp');
new Software('Noite');
new Software('Thalys');
print "Quantidade de objetos criados".Software::getContador();

 ?>
