<?php
//remover valores duplicados de um array.

$frutas = ["maçã" , "banana" , "laranja" , "banana" , "uva" , "maçã" ];
$n = count($frutas);
$newfrutas = [];
for ($i = 0 ; $i < $n; $i++){
   if (!in_array($frutas[$i], $newfrutas)){
    array_push($newfrutas , $frutas[$i]);
    
   }
}
 echo implode ("," , $newfrutas);