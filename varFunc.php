<?php

// Enforce strict types to ensure that only the specified types are accepted
declare(strict_types=1);

// &$x: A reference to an integer or float (so the original value can be modified)
// $y: An integer or float
// The function returns an integer or float
function foo(int|float &$x, int|float $y): int|float {
    // Check if $x is an even number
    if ($x % 2 === 0) {
        // If $x is even, divide it by 2 and update the original variable (because of the reference)
        $x /= 2;
    }
    return $x * $y;
}

$a = 6.0;
$b = 7;

// Since $a is passed by reference, it may be modified by the function
echo foo($a, $b) . '<br />';  

var_dump($a, $b);  // Displays the values and types of $a and $b
?>
