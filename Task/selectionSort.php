<?php

/**
 * selectionSort
 *
 * @param  mixed $nums
 * @return array
 */
function selectionSort($nums)
{
    for ($i = 0; $i < count($nums); $i++) {
        $min  = $nums[$i];
        for ($j = $i + 1; $j < count($nums); $j++) {
            $next = $nums[$j];
            if ($min > $next) {
                $nums[$i] = $next;
                $nums[$j] = $min;
                $min = $next;
            }
        }
    }
    return $nums;
}

var_dump(selectionSort([1, 3, 9, 2, 10]));
var_dump(selectionSort([10, 8, 7, 6, 5, 4, 3, 2, 1]));
var_dump(selectionSort([34, 22, 10, 19, 17]));
