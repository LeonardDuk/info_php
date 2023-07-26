<?php
 
  $a = "5";
  $b = "7";
 $operador = "**";
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
echo $resultado; 
