<?php
// Example PHP code for solving basic math problems

function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Error: Division by zero is not allowed.");
    }
    return $a / $b;
}
?>
