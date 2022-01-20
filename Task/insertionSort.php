<?php

/**
 * insertionSort
 *
 * @param  mixed $nums
 * @return array
 */
function insertionSort($nums)
{
    $c = 0;
    for ($i = 1; $i < count($nums); $i++) {
        $key = $nums[$i];
        $j = $i - 1;
        while ($j >= 0 and $nums[$j] > $key) {
            $c++;
            $nums[$j+1] = $nums[$j];
            $j = $j - 1;
        }
        $nums[$j+1] = $key;
    }
    var_dump($nums,$c);
}

var_dump(insertionSort([10, 8, 7, 6, 5, 4, 3, 1, 2]));
var_dump(insertionSort([1, 3, 9, 2, 10]));
var_dump(insertionSort([34, 22, 10, 19, 17]));