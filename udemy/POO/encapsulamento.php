<?php
  class Veiculo{
    public $placa;
    private $cor;
    protected $tipo;
  }

  $veiculo = new Veiculo();
  $veiculo->placa='THA6969';
  $veiculo->cor='THA6969';
  echo $veiculo->placa;
 ?>
