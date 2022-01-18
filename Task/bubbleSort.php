<?php

/**
 * bubbleSort
 *
 * @param  mixed $nums
 * @return array
 */
function bubbleSort($nums)
{
    for ($i = 0; $i < count($nums); $i++) {
        for ($j = 0; $j < count($nums) - 1; $j++) {
            $current  = $nums[$j];
            $next = $nums[$j + 1];
            if ($current > $next) {
                $temp = $current;
                $nums[$j] = $next;
                $nums[$j + 1] = $temp;
            }
        }
    }
    return $nums;
}

var_dump(bubbleSort([1, 3, 9, 2, 10]));
var_dump(bubbleSort([10, 8, 7, 6, 5, 4, 3, 2, 1]));
var_dump(bubbleSort([34, 22, 10, 19, 17]));
