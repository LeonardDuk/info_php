<?php
//encontrar o maior valor em um array. 
// E exibir esse valor ao final para o usuario.

$numeros = [10 , 80, 5 , 14 ,90 , 29, 99 , 1 , 122];
$n = count($numeros);

 for ( $i =0; $i < $n ; $i++) {
    if($i==0){
        $maior = $numeros[0];
    }
    else {
       if ($numeros[$i] > $maior){
        
      $maior = $numeros[$i];
       } 
    }
   
 }
echo "maior número é : {$maior}";


/*
2-) Por meio de tecnica de ordenação bubble sort, ordene o array abaixo em ordem cresecente.
Dica: Utilize o laço de repetição FOR, pode ser necessario mais de um e também deve ser utilizado um if.
*/
$numeros = [34,12,98,45,23,67,8];
