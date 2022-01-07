<?php

// Sliding Window - maxSubarraySum
// Given an array of integers and a number, write a function called  maxSubarraySum, which finds the maximum sum of a subarray with the length of the number passed to the function. Note that a subarray must consist of consecutive elements from the original array. In the first example below, [100, 200, 300] is a subarray of the original array, but [100, 300] is not.

$numbers = [1, 4, 2, 10, 23, 3, 1, 0, 20];
$count = 4;
function maxSubarraySum($numbers, $num)
{
    $max = 0;
    for ($i = 0; $i < $num; $i++) {
        $max += $numbers[$i];
    }

    $sum = $max;
    $total = 0;
    for ($i = $num; $i < count($numbers); $i++) {
        $sum += $numbers[$i] - $numbers[$i - $num];
        if ($sum  > $total) {
            $total = $sum;
        }
    }

    return $total;
}

var_dump(maxSubarraySum($numbers, $count));
