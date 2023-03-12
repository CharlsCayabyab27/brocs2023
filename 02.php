<?php
#Write a program that takes a string as input and outputs whether it is a palindrome.
// Get user input
$string = readline("Enter a string: ");

// Remove spaces and convert to lowercase
$string = strtolower(str_replace(' ', '', $string));

// Reverse the string
$reversed_string = strrev($string);

// Check if the string is a palindrome
if ($string == $reversed_string) {
    echo "{$string} is a palindrome.";
} else {
    echo "{$string} is not a palindrome.";
}
?>
