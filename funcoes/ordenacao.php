<?php
//encontrar o maior valor em um array. 
// E exibir esse valor ao final para o usuario.

// $numeros = [10 , 80, 5 , 14 ,90 , 29, 99 , 1 , 122];
// $n = count($numeros);

//  for ( $i =0; $i < $n ; $i++) {
//     if($i==0){
//         $maior = $numeros[0];
//     }
//     else {
//        if ($numeros[$i] > $maior){
        
//       $maior = $numeros[$i];
//        } 
//     }
   
//  }
// echo "maior número é : {$maior}";


/*
2-) Por meio de tecnica de ordenação bubble sort, ordene o array abaixo em ordem cresecente.
Dica: Utilize o laço de repetição FOR, pode ser necessario mais de um e também deve ser utilizado um if.
*/
$numeros = [34,12,98,45,23,67,8];
function bubble_sort($numeros){
   $n = count($numeros)-1;
   for ($i=0; $i<$n; $i++) {
      for ($j=0; $j<$n-$i; $j++) {
          $k = $j+1;
          if ($numeros[$k] < $numeros[$j]) {
              list($numeros[$j], $numeros[$k]) = array($numeros[$k], $numeros[$j]);
          }
      }
  }
  return $numeros;
}

echo implode("," , bubble_sort($numeros));

