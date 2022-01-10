<?php


function sumRange($num)
{
    if ($num == 1) return 1;
    return $num + sumRange($num - 1);
}

function factorial($num)
{
    if ($num == 1) return 1;
    return $num * factorial($num - 1);
}
// var_dump(factorial(7));

function collectOddValue($nums)
{
    $data = [];
    if (count($nums) == 0) return $data;
    if ($nums[0] % 2 != 0) {
        $data[] = $nums[0];
    }
    array_shift($nums);
    return array_merge($data, collectOddValue($nums));
}

function power($num, $exponent)
{
    if ($exponent == 0) return 1;

    return $num * power($num, $exponent - 1);
}

// var_dump(power(2, 2));



function productOfArray($nums)
{
    $calc = 1;
    if (count($nums) == 0) return $calc;
    $calc = $nums[0] * $calc;
    array_shift($nums);
    return $calc * productOfArray($nums);
}
// var_dump(productOfArray([1, 2, 3]));


function recursiveRange($num)
{
    if ($num == 0) return 0;
    return $num + recursiveRange($num - 1);
}
// var_dump(recursiveRange(28));


function fib($n)
{
    if ($n <= 2) return 1;
    return fib($n - 1) + fib($n - 2);
}
var_dump(fib(28));


function test($n)
{
    if ($n <= 2) return 1;
    return test($n - 1) +1;
}
var_dump(test(10));
