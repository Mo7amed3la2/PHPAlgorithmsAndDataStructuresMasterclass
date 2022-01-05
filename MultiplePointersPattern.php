<?php

$numbers = [-4, -3, -2, -1, 0, 3, 4, 5];
function sumZero($numbers)
{
    $left = 0;
    $right = count($numbers) - 1;

    while ($left < $right) {
        $sum = $numbers[$left] + $numbers[$right];
        if ($sum == 0) {
            return [$numbers[$left], $numbers[$right]];
        } elseif ($sum > 0) {
            $right--;
        } else {
            $left++;
        }
    }
}

var_dump(sumZero($numbers));
