<?php
$link = "http://localhost/curl/retorna_data.php";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);

$parametro = 'parametro=data';

curl_setopt($ch, CURLOPT_POSTFIELDS, $parametro);
$result = curl_exec($ch);
curl_close($ch);

var_dump($result);

 ?>
