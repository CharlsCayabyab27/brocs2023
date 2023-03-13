<?php
#Write a program that takes an array of strings as input and outputs the longest string in the array
function find_longest_string($arr) {
    $longest = "";
    foreach ($arr as $string) {
        if (strlen($string) > strlen($longest)) {
            $longest = $string;
        }
    }
    return $longest;
}

// Example usage
$my_array = array("apple", "banana", "kiwi", "pear");
$longest_string = find_longest_string($my_array);
echo $longest_string;  // Output: "banana"
?>