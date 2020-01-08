<?php

function routeBubble($arrayToSort){
    $tests=array(6,4,9,3,12,8,7);

    $x = 0;
    for ($j = 0; $j < count($arrayToSort); $j++){
        for ($i = 0; $i < count($arrayToSort) - 1; $i++){
            if ($arrayToSort[$i]> $arrayToSort[$i+1]){
                $x = $arrayToSort[$i];
                $arrayToSort[$i] = $arrayToSort[$i+1];
                $arrayToSort[$i+1] = $x;
            }
        }
    }
    for ($i = 0; $i<count($arrayToSort); $i++){
        echo $arrayToSort[$i].", ";
    }
    echo "<br>";
}


$testArray = array(2,6,7,1,12,33,5);
routeBubble($testArray);

?>