<?php
#Write a program that takes an array of numbers as input and outputs the average of the numbers.
function calculate_average($arr) {
    $sum = array_sum($arr); // calculate the sum of the array
    $count = count($arr); // get the count of the array
    $average = $sum / $count; // calculate the average
    
    return $average;
}

$input_array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$output_average = calculate_average($input_array);
echo $output_average;
?>
