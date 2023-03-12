<?php
#Write a program that takes a string as input and outputs the frequency of each character in the string.
// Get user input
$string = readline("Enter a string: ");

// Remove spaces and convert to lowercase
$string = strtolower(str_replace(' ', '', $string));

// Initialize an empty array to store character frequencies
$freq = array();

// Loop through each character in the string
for ($i = 0; $i < strlen($string); $i++) {
    // Get the current character
    $char = $string[$i];
    // If the character is not in the array, add it with a frequency of 1
    if (!array_key_exists($char, $freq)) {
        $freq[$char] = 1;
    // If the character is already in the array, increment its frequency by 1
    } else {
        $freq[$char]++;
    }
}

// Output the character frequencies
echo "Character frequencies:\n";
foreach ($freq as $char => $count) {
    echo "{$char}: {$count}\n";
}
?>
