<?php
// Write a function called findLongestSubstring, which accepts a string and returns the length of the longest substring with all distinct characters.
/**
 * lengthOfLongestSubstring
 *
 * @param  mixed $s
 * @return int
 */
function lengthOfLongestSubstring($s): int
{
    if ($s == '') {
        return 0;
    }
    $newString = str_split($s);
    if (count($newString) == 1) {
        return 1;
    }
    $start = 0;
    $end = 0;
    $countString = [];
    $c = 0;
    while ($start <= count($newString)) {

        // var_dump("start $start - c $c");
        if (!isset($countString[$newString[$start]])) {
            $countString[$newString[$start]] = $start + 1;
            $start++;
            $c++;
        } elseif (isset($countString[$newString[$start]])) {
            var_dump("dub here {$newString[$start]}");
            if ($c >= $end) {
                $end = $c;
            }
            $startIndex = $newString[$countString[$newString[$start]]];
            $startValue = $countString[$newString[$start]] + 1;
            $countString = [];
            $countString[$startIndex] = $startValue;
            $start = $startValue;
            $c = 0;
            $c++;
        }
        // var_dump($countString);
        // var_dump("start $start - c $c - end $end");
        if ($start == count($newString)) {
            break;
        }
    }
    return $c > $end ? $c : $end;
}

// echo lengthOfLongestSubstring("ohomm");
// echo lengthOfLongestSubstring("pwwkew");
// echo lengthOfLongestSubstring("abcabcbb");
echo lengthOfLongestSubstring("au");
