<?php
echo "SlidingWindowPattern";

// example 1
$numbers = [1, 2, 5, 2, 8, 1, 5];
$num = 2;

// // example 2
// $numbers = [1,2,5,2,8,1,5];
// $num = 4;

// // example 3
// $numbers = [4, 2, 1, 6];
// $num = 1;

// // example 4
// $numbers = [4, 2, 1, 6, 2];
// $num = 4;
function maxSubArraySum($numbers, $num)
{
    if ($num == 1) {
        return max($numbers);
    }
    $max = 0;
    for ($i = 0; $i < count($numbers) - 1; $i++) {
        $temp = 0;
        for ($j = $i; $j <= ($i + $num) - 1; $j++) {
            $temp +=  $numbers[$j];
        }
        if ($temp > $max) {
            $max = $temp;
        }
    }

    return $max;
}


var_dump(maxSubArraySum($numbers, $num));
