<?php


/**
 * merge
 *
 * @param  mixed $nums1
 * @param  mixed $nums2
 * @return array
 */
function merge($nums1, $nums2)
{
    $nums = [];
    $i = 0;
    $j = 0;
    while ($i < count($nums1) and $j < count($nums2)) {
        if ($nums2[$j] > $nums1[$i]) {
            $nums[] = $nums1[$i];
            $i++;
        } else {
            $nums[] = $nums2[$j];
            $j++;
        }
    }

    while ($i < count($nums1)) {
        $nums[] = $nums1[$i];
        $i++;
    }

    while ($j < count($nums2)) {
        $nums[] = $nums2[$j];
        $j++;
    }

    return $nums;
}

/**
 * mergeSort
 *
 * @param  mixed $nums
 * @return array
 */
function mergeSort($nums)
{
    if (count($nums) <= 1) return $nums;
    $middle = round(count($nums) / 2);
    $left = mergeSort(array_slice($nums, 0, $middle));
    $right = mergeSort(array_slice($nums, $middle));

    return merge($left, $right);
}

var_dump(mergeSort([10, 8, 7, 6, 5, 4, 3, 1, 2]));
var_dump(mergeSort([1, 3, 9, 2, 10]));
var_dump(mergeSort([34, 22, 10, 19, 17]));
