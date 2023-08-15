<?php
$meses = array ("Janeiro" , "fevereiro" , "Março" , "Abril" , "Maio" , "Junho" ,
 "Julho" , "Agosto" , "Setembro" , "Outubro" , "Novembro" , "Dezembro");

 $numMes = 5;

 if($numMes >= 1 && $numMes <=12){
    echo $meses[$numMes - 1];
 }
 else{
    echo "Mês invalído...";

 }