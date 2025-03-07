<?php
// Math Homework Solution

$a = 4;
$b = 7;
$c = 2;

function solution($a, $b, $c) {
    $x = ($a + $b) / 2;
    $y = sqrt(pow($x, 2) - 4 * $c);
    return "$x + $y = " . ($x + $y);
}

echo solution($a, $b, $c);
?>
