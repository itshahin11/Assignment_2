<?php
function printEvenNumbers($start, $end, $step) {
    // Ensure the start number is even
    $start = ($start % 2 == 0) ? $start : $start + 1;

    // Loop through even numbers and print them
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

// Call the function with the specified arguments
printEvenNumbers(2, 20, 2);

echo "\n";


  
  // Using while loop
  function printEvenNumbersWhile($start, $end, $step) {
    // Ensure the start number is even
    $start = ($start % 2 == 0) ? $start : $start + 1;

    // Initialize a variable
    $current = $start;

    // Use a while loop to print even numbers
    while ($current <= $end) {
        echo $current . " ";
        $current += $step;
    }
}

// Call the function with the specified arguments
printEvenNumbersWhile(2, 20, 2);

echo "\n";


  // Using do-while loop
  function printEvenNumbersDoWhile($start, $end, $step) {
    // Ensure the start number is even
    $start = ($start % 2 == 0) ? $start : $start + 1;

    // Initialize a variable
    $current = $start;

    // Use a do-while loop to print even numbers
    do {
        echo $current . " ";
        $current += $step;
    } while ($current <= $end);
}

// Call the function with the specified arguments
printEvenNumbersDoWhile(2, 20, 2);
