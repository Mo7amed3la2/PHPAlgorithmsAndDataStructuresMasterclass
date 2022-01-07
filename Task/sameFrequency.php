<?php

$number1 = 22;
$number2 = 222;

function sameFrequency($number1, $number2)
{
    $number1Array = str_split($number1);
    $number2Array = str_split($number2);

    $number1Count = [];
    $number2Count = [];

    foreach ($number1Array as $num1) {
        $number1Count[$num1] = isset($number1Count[$num1]) ? $number1Count[$num1] + 1 : 1;
    }

    foreach ($number2Array as $num2) {
        $number2Count[$num2] = isset($number2Count[$num2]) ? $number2Count[$num2] + 1 : 1;
    }

    foreach ($number1Array as $value) {
        if (!isset($number2Count[$value]) || $number1Count[$value] != $number2Count[$value]) {
            return false;
        }
    }
    return true;
}


var_dump(sameFrequency($number1, $number2));
