<?php


function calculateFibonacci($n) {
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return calculateFibonacci($n - 1) + calculateFibonacci($n - 2);
    }
}

$count = 0;
for ($i = 0; $count < 10; $i++) {
    $fibonacciNumber = calculateFibonacci($i);

    if ($fibonacciNumber > 100) {
        break; // Break the loop if the Fibonacci number exceeds 100
    }

    echo $fibonacciNumber . " ";
    $count++;
}
