<?php


function printFibonacci($n) {
    $fibonacci = [0, 1];
    
    for ($i = 2; $i < $n; $i++) {
        $nextFib = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        $fibonacci[] = $nextFib;
    }
    
    foreach ($fibonacci as $number) {
        echo $number . " ";
    }
}

printFibonacci(15);
