<?php 

function RouteRandomPass($stringLength) { 
    $char = 'abcdefghijklmnopqrstuvwxyz'; 
    $randString = ''; 
    for ($i = 0; $i < $stringLength; $i++) { 
        $j = rand(0, strlen($char) - 1); 
        $randString .= $char[$j]; 
    }
  
    echo $randString; 
} 
  
RouteRandomPass(7); 
?> 