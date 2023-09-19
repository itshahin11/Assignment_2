<?php
$a = 0;
$b = 1;
$i = 0;

while ($i < 10) {
  $c = $a + $b;
  echo "$c\n";

  if ($c > 100) {
    break;
  }

  $a = $b;
  $b = $c;
  $i++;
}
?>
