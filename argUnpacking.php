<?php

declare(strict_types=1);

// Define a function 'sum' that accepts two required parameters ($x and $y) and a variable number of additional parameters
// $x: A required integer or float
// $y: Another required integer or float
// ...$numbers: A variadic parameter that accepts a variable number of additional integers or floats
// The function returns an integer or float, which is the sum of all these numbers
function sum(int|float $x, int|float $y, int|float ...$numbers): int|float {
    // Return the sum of $x, $y, and all the additional numbers passed to the function
    // array_sum($numbers) adds up all the values in the variadic parameter $numbers
    return $x + $y + array_sum($numbers);
}

// Initialise variables $a and $b with a float and an integer respectively
$a = 6.0;
$b = 7;

// Call the function 'sum' with $a, $b, and a list of additional numbers
// The function will return the sum of all these values
echo sum($a, $b, 50, 100, 25.90, 8, 9) . '<br />';  // Outputs the result of the sum
?>