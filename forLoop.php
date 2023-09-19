<?php

// Function using a for loop
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

// Function using a while loop
function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

// Function using a do-while loop
function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

// Calling the functions to print even numbers
echo "Using for loop: ";
printEvenNumbersFor(2, 20, 2);

echo "\nUsing while loop: ";
printEvenNumbersWhile(2, 20, 2);

echo "\nUsing do-while loop: ";
printEvenNumbersDoWhile(2, 20, 2);
