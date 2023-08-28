<?php 
    $acrescimos = 0;
    $horaInicial = '16:00:00';
    $horaFinal = '17:30:00';

    $arrHora = explode(":", $horaInicial);
    $hora = $arrHora[0];
    $minutos = $arrHora[1];
    $segundos = $arrHora[2];
 
    $horaEmSegundos = $hora * 3600;
    $minutosEmSegundos = $minutos * 60;
    
    $totalInicialEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segundos;

    $arrHora = explode(":", $horaFinal);
   $horaFinal = $arrHora[0];
   $minutosFinal = $arrHora[1];
   $segundosFinal = $arrHora[2];

   $horaFinalEmSegundos = $horaFinal * 3600;
   $minutosFinalEmSegundos = $minutosFinal * 60;
   
   $totalFinalEmSegundos = $horaFinalEmSegundos + $minutosFinalEmSegundos + $segundosFinal;

   $tempoDoJogo = ($totalFinalEmSegundos - $totalInicialEmSegundos) /60;
    //echo "o Resultado final é: $tempoDoJogo";
    

    // calcular o tempo de jogo de um dia para o outro 

    $acrescimos = 0;
    $horaInicial = '23:00:00';
    $horaFinal = '00:30:00';

    $arrHora = explode(":", $horaInicial);
    $hora = $arrHora[0];
    $minutos = $arrHora[1];
    $segundos = $arrHora[2];
    
    $diaEmSegundos = 86400;          
    $horaEmSegundos = $hora * 3600;
    $minutosEmSegundos = $minutos * 60;
    
    $totalInicialEmSegundos =  $horaEmSegundos + $minutosEmSegundos + $segundos;

    $arrHora = explode(":", $horaFinal);
   $horaFinal = $arrHora[0];
   $minutosFinal = $arrHora[1];
   $segundosFinal = $arrHora[2];

   $horaFinalEmSegundos = $horaFinal * 3600;
   $minutosFinalEmSegundos = $minutosFinal * 60;
   
   $totalFinalEmSegundos =  $horaFinalEmSegundos + $minutosFinalEmSegundos + $segundosFinal ;

   $tempoDoJogo = ($totalFinalEmSegundos - $totalInicialEmSegundos) / 60 ;

   if ($tempoDoJogo <= 0 ) {
      
        $difinicial =  $diaEmSegundos - $totalInicialEmSegundos;
        $tempoDoJogo = ($difinicial + $totalFinalEmSegundos)/60 ;
   }
    
   echo "<br>o Resultado é: {$tempoDoJogo}<br>";
