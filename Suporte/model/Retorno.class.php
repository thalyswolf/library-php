<?php
  class Retorno extends Sql{

    public $retornos;
    function __constructor(){
       $this->retornos = $this->getRetornos();
    }
    public function getRetornos(){
      $query = "SELECT * FROM retorno as r INNER JOIN estadoretorno as er
      INNER JOIN movimentacao as m
      WHERE (r.estadoid = er.estadoid) AND (r.movimentacaoid = m.movimentacaoid)";
      return $this->select($query);
    }
    public function updateRetornos($id, $hora, $estid, $obs){
      $this->update("UPDATE retorno SET hora =:HORA, observacao = :OBS, estadoid = :EST_ID WHERE retornoid = :ID",  array(
        ":HORA" => $hora,
        ":OBS" => $obs,
        ":EST_ID" => $estid,
        ":ID" => $id
      ));
    }

    public function montaSelect(){
      return $this->select("SELECT * FROM estadoretorno");
    }

    public function save(){
      
    }
}
 ?>
