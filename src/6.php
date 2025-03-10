<?php
// Function to solve quadratic equations of the form ax^2 + bx + c = 0
function solveQuadraticEquation($a, $b, $c) {
    // Calculate the discriminant
    $discriminant = ($b * $b) - (4 * $a * $c);
    if ($discriminant < 0) {
        return "No real roots.";
    } elseif ($discriminant == 0) {
        return "One root: x = " . (-$b / (2 * $a));
    } else {
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
        return "Two roots: x1 = $root1, x2 = $root2";
    }
}
?>