<?php
  $sql = new Sql();
  $results = $sql->select("SELECT * FROM produtos WHERE id=:id", array(
  ":id"=>1
  ));
  var_dump($results);
 ?>
