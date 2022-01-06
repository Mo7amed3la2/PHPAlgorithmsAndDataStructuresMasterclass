<?php

$numbers = [-4, -3, -2, -1, 0, 3, 4, 5];

/**
 * sumZero
 *
 * @param  mixed $numbers
 * @return array
 */
function sumZero($numbers) : array
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


$numbers = [1,2,3,4,4,4,7,7,12,12,13];
// $numbers = [1,1,1,1,12];

/**
 * countUniqueValues
 *
 * @param  mixed $numbers
 * @return int
 */
function countUniqueValues($numbers) : int
{
    $unique = [];
    foreach($numbers as $num){
        if(!$unique[$num]){
            $unique[$num] = $num; 
        }
    }
    return count($unique);
}
echo "countUniqueValues";
var_dump(countUniqueValues($numbers));



/**
 * countUniqueValues2
 *
 * @param  mixed $numbers
 * @return int
 */
function countUniqueValues2($numbers) :int
{
    $c = 0;
    for ($i=1; $i < count($numbers); $i++) { 
        if($numbers[$c] != $numbers[$i]){
            $c++;
            $numbers[$c] = $numbers[$i];
        }
    }

    return $c + 1;
}
echo "countUniqueValues2";
var_dump(countUniqueValues2($numbers));
