<?php

$dataString = "32/05/1990";
$data = explode("/", $dataString);
$dia = $data[0];
$mês = $data[1];
$ano = $data[2];




    if ($dia < 1  || $dia > 31){
        $dia = 1;
        
    }
    
    if ($mês < 1  || $mês > 12){
        $mês = 1;

    }   
     
     $meses30dias = [4 , 6 , 9, 11];
     $meses31dias = [1, 3 , 5 , 7 , 8 , 10 , 12];

    if (in_array($mês,$meses30dias) && $dia > 30 ){
        $dia = 1;
        $mês += 1;
    }

    if (in_array($mês,$meses31dias) && $dia > 31 ){
        $dia = 1;
        $mês += 1;
    }
        if (in_array($mês,$meses30dias) && $dia > 30 ){
            $dia = 31;
            $mês -= 1;
        }
    
        if (in_array($mês,$meses31dias) && $dia > 31 ){
            $dia = 30;
            $mês -= 1;
    
}

