<?php
# Write a program that outputs the first n triangular numbers.
// Get user input
$n = readline("Enter a value for n: ");

// Initialize a variable to store the current triangular number
$triangular = 0;

// Loop through the first n triangular numbers
for ($i = 1; $i <= $n; $i++) {
    // Calculate the current triangular number
    $triangular += $i;
    // Output the current triangular number
    echo "{$i}: {$triangular}\n";
}
?>
