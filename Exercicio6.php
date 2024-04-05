<?php

function bubbleSort(&$array) {
    $n = count($array);
    
    for ($i = 0; $i < $n-1; $i++) {
        for ($j = 0; $j < $n-$i-1; $j++) {
            if ($array[$j] > $array[$j+1]) {
                
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
            }
        }
    }
}

$array = [64, 34, 25, 12, 22, 11, 90];
echo "Array não ordenado: \n";
echo implode(", ", $array) . "\n";

bubbleSort($array);

echo "Array ordenado (Bubble Sort): \n";
echo implode(", ", $array) . "\n";

