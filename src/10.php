
<?php
// Get the input from the user
$input = readline("Enter a number: ");
// Validate the input
if (!is_numeric($input)) {
    echo "Invalid input. Please enter a number.";
} else {
    // Calculate the result
    $result = $input * 2;
    // Display the result
    echo "$input x 2 = $result";
}
?>