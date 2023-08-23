<?php

$acrescimos = 0 ;
$horainicial = "16:00:00";
$horafinal = "17:30:00";

$arrhora = explode(":" ,$horainicial);
$hora = $arrhora[0];
$minutos = $arrhora[1];
$segundos = $arrhora[2];

$horaemsegundos = $hora * 3600;
$minutosemsegundos = $minutos *60;

$totalinicialemsegundos = $horaemsegundos + $minutosemsegundos + $segundos ;


 $arrhoraf = explode(":" ,$horafinal);
$horaf = $arrhoraf[0];
$minutosf = $arrhoraf[1];
$segundosf = $arrhoraf[2];

$horaemsegundosf = $horaf * 3600;
$minutosemsegundosf = $minutosf *60;

$totalfinalemsegundosf = $horaemsegundosf + $minutosemsegundosf + $segundosf ;


$resultado =  ($totalfinalemsegundosf - $totalinicialemsegundos ) / 60 ;
 
echo "<br>o resultado é: $resultado<br>";

