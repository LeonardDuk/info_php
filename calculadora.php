<?php
 
  $a = "2";
  $b = "4";
 $operador = "ma";
 $resultado = "0";
 
 if ($operador == "+") {
    $resultado = $a + $b;
 }

 if ($operador == "-") {
    $resultado = $a - $b ;
 }
 
if ($operador == "*") {
    $resultado = $a *  $b ;
}

if ($operador == "/") {
    $resultado =  $a / $b ;
} 
 
if ($operador == "**") {
    $resultado = $a ** $b ;
}

if ($operador == "perc") {
    $resultado = $a-($a * $b) / 100;
                  
}

if ($operador == "perc") {
    $resultado = $a+($a * $b) / 100;
                  
}

if ( $operador == "ma") {
    $resultado = ($a + $b)/2 ;
} 
echo $resultado; 
