<?php
# Write a program that takes an array of numbers as input and outputs the median of the numbers
function calculate_median($arr) {
    sort($arr); // sort the array in ascending order
    $count = count($arr); // get the count of the array
    $middle_index = floor($count / 2); // find the middle index
    
    if ($count % 2 == 0) {
        // if the array has an even number of elements, find the average of the two middle elements
        $middle_sum = $arr[$middle_index - 1] + $arr[$middle_index];
        $median = $middle_sum / 2;
    } else {
        // if the array has an odd number of elements, take the middle element
        $median = $arr[$middle_index];
    }
    
    return $median;
}

$input_array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$output_median = calculate_median($input_array);
echo $output_median;
?>
