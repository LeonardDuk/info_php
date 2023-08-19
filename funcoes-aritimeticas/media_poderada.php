<?php

$média = 6;
$prova = 4;
$peso = 5;
$prova2 = 1.5;
$peso2 = 3;
$prova3 = 2;
$peso3 = 2;

$numerador = ($prova * $peso) + ($prova2 * $peso2) + ($prova3 * $peso3);
$denominador = ($peso + $peso2 + $peso3);

if ($média < 6) {
  $média = $numerador / $denominador; 

  echo "O aluno foi reprovado com a média final de:{$média}";
}
 else 
 {
   echo" o aluno foi aprovado com a média final de:{$média}";
 }

 
