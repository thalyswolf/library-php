<?php
$cep = "89340000";
$link = "viacep.com.br/ws/$cep/xml/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);
$data = xmlrpc_decode($response, true);
var_dump($data);
 ?>
