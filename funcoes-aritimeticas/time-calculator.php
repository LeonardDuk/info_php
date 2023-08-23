<?php

$acrescimos = 0 ;
$horainicial = "23:00:00";
$horafinal = "00:30:00";

$arrhora = explode(":" ,$horainicial);
$hora = $arrhora[0];
$minutos = $arrhora[1];
$segundos = $arrhora[2];

$diaemsegundos = $dia * 82800;
$horaemsegundos = $hora * 3600;
$minutosemsegundos = $minutos *60;

$totalinicialemsegundos = $horaemsegundos + $minutosemsegundos + $segundos  + $diaemsegundos;


 $arrhoraf = explode(":" ,$horafinal);
$horaf = $arrhoraf[0];
$minutosf = $arrhoraf[1];
$segundosf = $arrhoraf[2];

$diaemsegundosf = $diaf * 82800;
$horaemsegundosf = $horaf * 3600;
$minutosemsegundosf = $minutosf *60;

$totalfinalemsegundosf = $horaemsegundosf + $minutosemsegundosf + $segundosf + $diaemsegundosf;


$resultado =  ($totalinicialemsegundos - $totalfinalemsegundosf ) / 60 ;
 
echo " <br>o resultado é: $resultado<br>";