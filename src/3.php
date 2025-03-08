
<?php
// Function to generate a random number between 1 and 10
function getRandomNumber() {
    $number = mt_rand(1, 10);
    return $number;
}

// Function to get the sum of two numbers
function getSum($num1, $num2) {
    return $num1 + $num2;
}

// Function to get the difference of two numbers
function getDifference($num1, $num2) {
    return $num1 - $num2;
}

// Function to get the product of two numbers
function getProduct($num1, $num2) {
    return $num1 * $num2;
}

// Function to get the quotient of two numbers
function getQuotient($num1, $num2) {
    if ($num2 == 0) {
        echo "Error: Divide by zero!";
    } else {
        return $num1 / $num2;
    }
}

// Function to check if a number is even or odd
function isEven($number) {
    if ($number % 2 == 0) {
        echo "The number is even.";
    } else {
        echo "The number is odd.";
    }
}
?>