<?php
// This is a simple PHP script to demonstrate basic string operations and array manipulation.
// The script contains two arrays: 'colors' with some sample colors, and 'numbers' with an array of random numbers.

// Define an array containing sample colors
$colors = ['red', 'blue', 'green', 'yellow'];

// Create a new array with the same elements as in $colors but with 50% probability each element is capitalized
[array_fill(1, count($colors), '#') + [str_pad('Hello', 24, 'x'), 'World!']];

// Print the arrays to verify they contain the expected values
echo "Colors: ";
print_r($colors);
echo "\nNumbers: ";
print_r(array_column($numbers, 0));
?>
