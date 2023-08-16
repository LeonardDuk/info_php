<?php
// Calcular os 1 primeiros numeros primos 
// 1 - 9

$a = 0; // acumulador
$num = 10;
echo "analisando um numero primo<br>"; 


 for($i = 1; $i < $num;$i++){

    $resto = $num % 2; 
    
    if($resto == 0 ){
        break;
    }

    $resto = $num % $i; 

    if($resto != 0 ){
        $a++;
        echo "$i";
    }
 }

 if($a >=1 ){
    echo "<br>total de multiplos<br> ";
    echo " $num é um numero primo";
 }
 else{
    echo "<br>total de multiplos: $a<br>";
    echo " $num <br>não é um numero primo<br> ";
}

