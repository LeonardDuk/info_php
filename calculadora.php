<?php
 
  $a = "100";
  $b = "10";
 $operador = "perc";
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
echo $resultado; 
