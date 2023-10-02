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


 $frutas = ["maçã" , "banana" , "laranja" , "banana" , "uva" , "maçã" , " maçã" ];
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
    if (!in_array($frutas[$i], $newfrutas)){
             array_push($newfrutas , $frutas[$i]);
            }
}

 echo implode ("," , $newfrutas);