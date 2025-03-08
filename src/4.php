<?php 
$math_problem = '5 + 2';
$solution = $math_problem;
if($math_problem == "5 + 2") {
    $solution = '7';
} else if($math_problem == "2 * 3") {
    $solution = '6';
} else if($math_problem == "10 - 4") {
    $solution = '6';
} else if($math_problem == "25 / 5") {
    $solution = '5';
} else if($math_problem == "100 % 25") {
    $solution = '75';
} else if($math_problem == "10^3") {
    $solution = '1000';
} else if($math_problem == "10!") {
    $solution = '3,628,800';
} else {
    $solution = 'Invalid Input';
}
echo $solution;
?>