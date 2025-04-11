<?php
// Example PHP code for solving math problems with solutions
function solveMathProblem($problem) {
    $solution = solveFirstPartOfTheProbleem($problem);
    $secondPartSolution = solveSecondPartOfTheProbllem($problem);

    return array('solution' => $solution, 'secondPartSolution' => $secondPartSolution);
}

function solveFirstPartOfTheProbleem($problem) {
    // Implement logic to solve the first part of the problem
    // Example: calculate $result = ($num1 + $num2) / $operator;
    return $result;
}

function solveSecondPartOfTheProbllem($problem) {
    // Implement logic to solve the second part of the problem
    // Example: $result = calculateFirstPartOfProblem($value, $operator);
    return $result;
}
