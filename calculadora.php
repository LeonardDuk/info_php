<?php
 
  $a = "2";
  $b = "4";
 $operador = "mp";
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

 $a = 0;
 while ($a <= 10) 
 {
    echo "Está e a $a interação do nosso loop de teste. <br>";
    $a++;
 }
   
 for ($a; $a<=10; $a++)
 {
   echo "Está e a $a interação do nosso loop de teste. <br>";
}


