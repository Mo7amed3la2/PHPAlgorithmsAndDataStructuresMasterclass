<?php

/**
 * bubbleSort
 *
 * @param  mixed $nums
 * @return array
 */
function bubbleSort($nums)
{
    $c = 0;
    for ($i = 0; $i < count($nums) - 1; $i++) {
        $flag = true;
        for ($j = 0; $j < count($nums) - $i - 1; $j++) {
            $c++;
            if ($nums[$j] > $nums[$j + 1]) {
                $temp = $nums[$j];
                $nums[$j] = $nums[$j + 1];
                $nums[$j + 1] = $temp;
                $flag = false;
            }
        }
        if ($flag == true) {
            break;
        }
    }
    var_dump($nums,$c);
}

var_dump(bubbleSort([10, 8, 7, 6, 5, 4, 3, 1,2]));
var_dump(bubbleSort([1, 3, 9, 2, 10]));
var_dump(bubbleSort([34, 22, 10, 19, 17]));
