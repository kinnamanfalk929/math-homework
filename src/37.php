<?php
function calculateArea($shape, $dimensions) {
    switch ($shape) {
        case 'circle':
            if (is_numeric($dimensions[0]) && is_numeric($dimensions[1])) {
                $radius = min($dimensions[0], $dimensions[1]);
                return pi() * pow($radius, 2);
            }
            break;
        case 'rectangle':
            if (is_numeric($dimensions[0]) && is_numeric($dimensions[1]) && is_numeric($dimensions[2]) && is_numeric($dimensions[3])) {
                return $dimensions[0] * $dimensions[1];
            }
            break;
        default:
            echo "Unknown shape";
    }
}

function calculatePerimeter($shape, $dimensions) {
    switch ($shape) {
        case 'circle':
            if (is_numeric($dimensions[0]) && is_numeric($dimensions[1])) {
                return 2 * pi() * $dimensions[0];
            }
            break;
        case 'rectangle':
            if (is_numeric($dimensions[0]) && is_numeric($dimensions[1]) && is_numeric($dimensions[2]) && is_numeric($dimensions[3])) {
                return ($dimensions[0] + $dimensions[2]) * $dimensions[1];
            }
            break;
        default:
            echo "Unknown shape";
    }
}

// Example usage
$circleArea = calculateArea('circle', [4, 6]);
$rectanglePerimeter = calculatePerimeter('rectangle', [5, 3, 4, 2]);

echo "Circle area: $circleArea";
echo "Rectangle perimeter: $rectanglePerimeter";
