<?php

function routeBinarySearch($arrayToSearch, $number){
    
    $min = 0;
    $max = count($arrayToSearch) - 1;
    $sum = $max + $min;
    
    function routeBinarySearch2($sum, $arrayToSearch, $number){
        $avg = round($sum/2);
        if ($arrayToSearch[$avg] == $number){
            echo "index = ".$avg;
        } elseif ($arrayToSearch[$avg] < $number) {
            routeBinarySearch2($sum + 1, $arrayToSearch, $number);
        } else {
            routeBinarySearch2($sum - 1, $arrayToSearch, $number);
        }
    }
    routeBinarySearch2($sum, $arrayToSearch, $number);
}
$numArray = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97);
$num = 71;
routeBinarySearch($numArray, $num);

?>