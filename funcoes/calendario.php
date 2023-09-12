<?php

$dataString = "29/05/1990";
$data = explode("/", $dataString);
$dia = $data[0];
$mês = $data[1];
$ano = $data[2];


function validardata($dia , $mês , $ano ) {
    $dataString = "{$dia}/{$mês}/{$ano}";

    if (($ano % 4 == 0) && ($ano % 100 != 0 || $ano % 400 == 0)) {
        echo "{$dataString}  é bissexto";
    } 
    else {
        echo "{$dataString} não é bissexto";
    }
}

validardata($dia , $mês , $ano );
