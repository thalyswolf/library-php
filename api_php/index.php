<?php
class Obj{
  public $nome;
  public $age;
  public $city;

}
$myObj = new Obj();
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;
 ?>
