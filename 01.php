<?php
#Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
// Get user input
$character = readline("Enter a character: ");

// Convert the input to lowercase
$character = strtolower($character);

// Check if the input is a vowel or a consonant
if ($character == 'a' || $character == 'e' || $character == 'i' || $character == 'o' || $character == 'u') {
    echo "{$character} is a vowel.";
} else {
    echo "{$character} is a consonant.";
}
?>
