<?php

// Create an array of math operations
$operations = array("add", "subtract", "multiply", "divide");

// Generate a random operation from the array
$operation = $operations[array_rand($operations)];

// Generate two random numbers for the operation
$num1 = rand(0, 100);
$num2 = rand(0, 100);

// Use the appropriate math function to perform the operation
if ($operation == "add") {
    $result = $num1 + $num2;
} else if ($operation == "subtract") {
    $result = $num1 - $num2;
} else if ($operation == "multiply") {
    $result = $num1 * $num2;
} else if ($operation == "divide") {
    $result = $num1 / $num2;
}

// Print the result
echo $result;

?>
