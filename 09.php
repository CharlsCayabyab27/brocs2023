<?php
#Write a program that takes a string as input and outputs the string with all vowels removed
$input_string = "Hello, World!";
$output_string = preg_replace('/[aeiou]/i', '', $input_string);
echo $output_string;
?>
