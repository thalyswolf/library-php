<?php
  class Funcionario{
    public $nome;
    private $sobrenome = 'Teste';
    public $salario;
    function setNome(){}
    function getNome(){}
    function setSalario(){}
    function getSalario(){}
  }

print_r(get_class_methods('Funcionario'));
echo "<hr>";
//retorna um vetor com os atributos publicos do objeto
$jose=new Funcionario();
$jose->nome='Jose da silva';
$jose->salario = 3000;
print_r(get_object_vars($jose));
echo "<hr>";

 ?>
