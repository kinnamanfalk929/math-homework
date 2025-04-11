<?php
// Example PHP code for generating random data

function getRandomInt($min, $max) {
    $min = is_int($min) ? $min : range(min, max);
    return array_rand($min, 1)[0];
}

echo "Random number between 1 and 10: " . getRandomInt(1, 10);
