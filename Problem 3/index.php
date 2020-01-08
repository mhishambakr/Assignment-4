<?php
function findWord($arrayToSearch, $keyword){
    for ($i = 0; $i<count($arrayToSearch); $i++){
        if ($arrayToSearch[$i] == $keyword){
            echo "YES";
        break;
        } elseif($i == count($arrayToSearch) - 1){
            echo "NO";
        }
    }
}
$vehicles = array("Car", "Tank", "Train", "Bus");
$word = "Tank";
findWord($vehicles, $word);
?>