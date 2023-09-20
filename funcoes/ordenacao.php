<?php
//encontrar o maior valor em um array. 
// E exibir esse valor ao final para o usuario.

$numeros = [10 , 80, 5 , 14 ,90 , 29, 99 , 1 , 122];
$n = count($numeros);

 for ( $contador  =0; $contador < $n ; $contador++) {
    if($contador==0){
        $maior = $numeros[0];
    }
    else {
       if ($numeros[$contador] > $maior){
        
      $maior = $numeros[$contador];
       } 
    }
   
 }
echo "maior número é : {$maior}";
