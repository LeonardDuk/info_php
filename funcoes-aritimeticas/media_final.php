<?php

$notas =  array ( 5, 10, 4);
$somatotal= 0;
$mg = "6,33";

for($i = 0; $i < count($notas); $i++){
    $somatotal += $notas[$i];
}
    $resultado = $somatotal / count($notas); 

if($resultado>=6){
    echo "Aprovado, média final {$resultado}";
}
else{
    echo "Reprovado, média final {$resultado}";
}
