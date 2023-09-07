<?php 

 function soma($value1,$value2){
    
    if ($value1 == 0){
        return $value1;
    }

     return $value1 + $value2 ;
 }

  function calcular($operador,$value1,$value2){
     if($operador == '+'){
         return soma($value1,$value2);
     }
  }

 function exibirResultado($resultado){
     echo $resultado . "<br>";
 } 

  $resultado = calcular($operador, $value1, $value2);

  exibirResultado($resultado);