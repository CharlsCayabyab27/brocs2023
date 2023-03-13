<?php
#Write a program that takes a number as input and outputs the sum of its digits.
// Get user input
$num = readline("Enter a number: ");

// Initialize a variable to store the sum
$sum = 0;

// Loop through each digit in the number
for ($i = 0; $i < strlen($num); $i++) {
    // Get the current digit
    $digit = intval($num[$i]);
    // Add the digit to the sum
    $sum += $digit;
}

// Output the sum of digits
echo "The sum of digits in {$num} is: {$sum}";
?>
