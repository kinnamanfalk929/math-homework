
<?php
// Generate a random number between 1 and 10
$randomNumber = rand(1, 10);

// Ask the user to guess the number
echo "Guess the number between 1 and 10: ";
$guess = trim(fgets(STDIN));

// Check if the guess is correct
if ($guess == $randomNumber) {
    echo "You are correct!";
} else {
    echo "Sorry, you are incorrect. The correct answer was $randomNumber.";
}
?>