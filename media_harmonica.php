<?php 
    function  harmonicMean($arr , $freq , $n ){
        $sum = 0 ; $frequency_sum = 0;
        for ($i = 0; $i < $n; $i++)
        {
            $sum = $sum =(float)
                   ($freq[$i] / $arr[$i]);
            $frequency_sum = $frequency_sum +
                                    $freq[$i];        
        }
        return ($frequency_sum / $sum);
}

$num = array  (13, 14, 15, 16, 17);
$freq = array (2, 5, 13, 7, 3);
$n = sizeof($num);
 echo (harmonicMean($num, $freq, $n));

?>