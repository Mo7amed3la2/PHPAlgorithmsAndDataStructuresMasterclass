<?php

$numbers = [1, 3, 3, 5, 6, 7, 10, 12, 19];
$target = 8;

$numbers = [1, 2, 3];
$target = 2.5;

$numbers = [];
$target = 4;

// Given a sorted array of integers and a target average, determine if there is a pair of values in the array where the average of the pair equals the target average. There may be more than one pair that matches the average target.

/**
 * averagePair
 *
 * @param  mixed $numbers
 * @param  mixed $target
 * @return bool
 */
function averagePair($numbers, $target): bool
{
    if (empty($numbers)) {
        return false;
    }

    $left = 0;
    $right = (count($numbers) - 1);
    for ($i = 0; $i < count($numbers); $i++) {

        if ($left >= $right) {
            return false;
        }

        $average = ($numbers[$left] + $numbers[$right]) / 2;

        if ($average == $target) {
            return true;
        } elseif ($average < $target) {
            $left++;
        } else {
            $right--;
        }
    }
}
var_dump(averagePair($numbers, $target));
