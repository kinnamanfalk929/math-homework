<?php
// Define an array of questions and their corresponding solutions
$questions = [
    ['question1', 'solution1'],
    ['question2', 'solution2'],
    ['question3', 'solution3']
];

// Get a random question from the array
$randomQuestion = $questions[random_int(0, count($questions) - 1)];

// Display the randomly selected question and its solution
echo "Question: $randomQuestion\nSolution: $questions[$randomQuestion][1]";
?>
