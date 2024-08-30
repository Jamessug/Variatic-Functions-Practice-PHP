<?php

declare(strict_types=1);

// Define a function 'foo' that accepts two integer parameters and returns an integer
function foo(int $x, int $y): int {
    // Check if $x is divisible by $y (i.e., if $x divided by $y has no remainder)
    if ($x % $y === 0) {
        return $x / $y;
    }
    // If not divisible, return $x unchanged
    return $x;
}

$x = 6;
$y = 3;

// Named arguments allow you to specify the values for specific parameters by name, in any order
echo foo(y: $y, x: $x);  // Even though $y is passed first, it corresponds to the parameter $y, and $x to $x
?>
