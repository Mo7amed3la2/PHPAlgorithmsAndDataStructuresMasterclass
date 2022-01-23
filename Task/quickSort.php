<?php


/**
 * pivot
 *
 * @param  mixed $nums
 * @param  mixed $start
 * @param  mixed $end
 * @return void
 */
function pivot(&$nums, $start, $end)
{
    $pivot = $nums[$start];
    $swapIndex = $start;
    for ($i = $start + 1; $i <= $end; $i++) {
        if ($pivot > $nums[$i]) {
            $swapIndex++;
            $temp = $nums[$swapIndex];
            $nums[$swapIndex] = $nums[$i];
            $nums[$i] = $temp;
        }
    }
    $temp = $nums[$swapIndex];
    $nums[$swapIndex] = $nums[$start];
    $nums[$start] = $temp;
    return $swapIndex;
}

/**
 * quickSort
 *
 * @param  mixed $nums
 * @param  mixed $left
 * @param  mixed $right
 * @return void
 */
function quickSort(&$nums, $left = 0, $right = null)
{
    if ($right === null) {
        $right  = count($nums) - 1;
    }
    if ($left < $right) {
        $pivotIndex = pivot($nums, $left, $right);
        quickSort($nums, $left, $pivotIndex - 1);
        quickSort($nums, $pivotIndex + 1, $right);
    }
    return $nums;
}

$data = [4, 6, 9, 1, 2, 5, 3];
var_dump(quickSort($data, 0, 6));

$data = [10, 2, 1, 4, 6, 9, 5];
var_dump(quickSort($data));
