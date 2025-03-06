<?php
function getRandomNumber($min = 0, $max = 10) {
    return rand($min, $max);
}

$randomNumber = getRandomNumber();

echo "Your random number is: " . $randomNumber;
?>