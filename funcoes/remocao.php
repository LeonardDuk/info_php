<?php
//remover valores duplicados de um array.

// $frutas = ["maçã" , "banana" , "laranja" , "banana" , "uva" , "maçã" , " maçã" ];
// $n = count($frutas);
// $newfrutas = [];
// for ($i = 0 ; $i < $n; $i++){
//    if (!in_array($frutas[$i], $newfrutas)){
//     array_push($newfrutas , $frutas[$i]);
//     }
//     else {
//         $newfrutas += 1 ;
//     }
// }

//  echo implode ("," , $newfrutas);


//  $frutas = ["maçã" , "banana" , "laranja" , "banana" , "uva" , "uva" , "pera" , "maçã" , "maçã" ];
// $n = count($frutas);
// $newfrutas = [];
// for ($i = 0 ; $i < $n; $i++){
//     $fruta = $frutas[$i];
//        if (!isset($newfrutas[$fruta])){
//      $newfrutas[$fruta] = 1 ;
//     }
//     else {
//         $newfrutas[$fruta] += 1;
//     }
//     if (!in_array($frutas[$i], $newfrutas)){
//              array_push($newfrutas , $frutas[$i]);
//             }
// }

//  echo implode (" " , $newfrutas);


 //Utilizar o mesmo exercício e criar uma função que recebe 
 // Dois parametros (array, string) para ordenar o array de frutas(1° parametro)
 // em ordem crescente(ASC) or decrescente(DESC)

 $frutas = ["maçã" , "banana" , "laranja" , "banana" , "uva" , "uva" , "pera" , "maçã" , "maçã" ];
 
 $n = count($frutas);

 $newfrutas = [];

 for ($i = 0 ; $i < $n; $i++){
    $fruta = $frutas[$i];

    if (!isset($newfrutas[$fruta])){
        $newfrutas[$fruta] = 1 ;
    }
    else {
        $newfrutas[$fruta] += 1;
    }
}

foreach ($newfrutas as $fruta => $value) {
    echo "{$fruta} {$value}<br>";
}

function ordencao($newfrutas, $ordem = "asc") {

    if ($ordem == "asc") {
      arsort($newfrutas);
    } else {
        rsort($newfrutas);
    }

    return $newfrutas;
}

$ordem ="asc";


foreach ($frutas as $i => $value) {
    echo "{$i} {$value} <br>";
}
 