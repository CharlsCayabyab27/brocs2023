<?php
#Write a program that takes an array of numbers as input and outputs the sum of the numbers
// Get user input
$nums = readline("Enter numbers separated by spaces: ");

// Convert the string of numbers to an array
$nums_arr = explode(' ', $nums);

// Initialize a variable to store the sum
$sum = 0;

// Loop through each number in the array
foreach ($nums_arr as $num) {
    // Add the number to the sum
    $sum += $num;
}

// Output the sum of numbers
echo "The sum of numbers is: {$sum}";
?>
