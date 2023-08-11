<?php

function fibonacci($n) {
    if ($n <= 0 || $n > 20) {
        return "Invalid input. Please enter a value between 1 and 20.";
    }

    $a = 0;
    $b = 1;
    
    $result = [];
    
    for ($i = 1; $i <= $n; $i++) {
        $result[] = $a; 
        
        $temp = $b;
        $b = $a + $b;
        $a = $temp;
    }
    
    return implode(", ", $result);
}

$input = 5;
echo fibonacci($input);

?>
