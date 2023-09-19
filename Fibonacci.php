<?php
function fibonacci($n) {
  $a = 0;
  $b = 1;

  for ($i = 0; $i < $n; $i++) {
    $c = $a + $b;
    echo "$c\n";

    $a = $b;
    $b = $c;
  }
}

fibonacci(15);
?>
