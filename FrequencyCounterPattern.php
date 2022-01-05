<?php


$array1 = [1, 2, 3, 2, 5];
$array2 = [4, 1, 9, 4, 25];

function same($array1, $array2)
{
    // return false if count array does not identical
    if (count($array1) != count($array2)) {
        return false;
    }

    foreach ($array1 as $a1) {
        $r = false;
        $num = $a1 * $a1;
        foreach ($array2 as $index => $a2) {
            if ($num == $a2) {
                $r = true;
                unset($array2[$index]);
                break; // to avoid remove another number
            }
        }
        if ($r == false) {
            return false;
        }
    }
    return true;
}

var_dump(same($array1, $array2));


function same2($array1, $array2)
{
    $arrayfc1 = [];
    $arrayfc2 = [];

    // return false if count array does not identical
    if (count($array1) != count($array2)) {
        return false;
    }

    foreach ($array1 as  $a1) {
        $arrayfc1[$a1] = isset($arrayfc1[$a1]) ? $arrayfc1[$a1] + 1 : 1;
    }

    foreach ($array2 as  $a2) {
        $arrayfc2[$a2] = isset($arrayfc2[$a2]) ? $arrayfc2[$a2] + 1 : 1;
    }

    foreach ($arrayfc1 as $key => $value) {
        if ($arrayfc1[$key] != $arrayfc2[pow($key, 2)]) {
            return false;
        }
    }

    return true;
}

var_dump(same2($array1, $array2));


