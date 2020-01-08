<?php

function sumArray($arrayToSum){
    
    $sum = 0;
    for ($i = 0; $i < count($arrayToSum); $i++){
        $sum += $arrayToSum[$i];
    }
    echo "Sum of the array is equal to ".$sum."<br>";
}

$arrayOne = array(1,2,3,4,5,6,7,8,9,10);

sumArray($arrayOne);
?>