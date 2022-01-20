<?php

/**
 * selectionSort
 *
 * @param  mixed $nums
 * @return array
 */
function selectionSort($nums)
{
    $c = 0;
    for ($i = 0; $i < count($nums); $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($nums); $j++) {
            $c++;
            if ($nums[$j] < $nums[$min]) {
                $min = $j;
            }
        }
        $temp = $nums[$i];
        $nums[$i] = $nums[$min];
        $nums[$min] = $temp;
    }
    var_dump($nums, $c);
}

var_dump(selectionSort([10, 8, 7, 6, 5, 4, 3, 1, 2]));
var_dump(selectionSort([1, 3, 9, 2, 10]));
var_dump(selectionSort([34, 22, 10, 19, 17]));
