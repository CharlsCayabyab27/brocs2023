<?php
#Write a program that takes a string as input and outputs the number of words in the string
function count_words($str) {
    $words = explode(" ", $str);  // Split the string into an array of words
    return count($words);  // Return the count of the words array
}

// Example usage
$string = "The quick brown fox jumps over the lazy dog";
$num_words = count_words($string);
echo $num_words;  // Output: 9
?>