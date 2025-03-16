<?php
// Function to solve the quadratic equation ax^2 + bx + c = 0
function solveQuadratic($a, $b, $c) {
    // Calculate the discriminant of the quadratic equation
    $discriminant = $b * $b - 4 * $a * $c;

    // If the discriminant is negative, there are no real roots
    if ($discriminant < 0) {
        return "No real roots";
    } elseif ($discriminant == 0) {
        // If the discriminant is zero, there is one repeated root
        $root = -$b / (2 * $a);
        return "$root";
    } else {
        // If the discriminant is positive, there are two distinct roots
        $sqrt_discriminant = sqrt($discriminant);
        $root1 = (-$b + $sqrt_discriminant) / (2 * $a);
        $root2 = (-$b - $sqrt_discriminant) / (2 * $a);
        return "$root1 and $root2";
    }
}
?>
