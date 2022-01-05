<?php

echo "validAnagram";

$string1 = 'mo7amed3la2';
$string2 = '2al3dema7om';

function validAnagram($string1, $string2)
{
    $arrayString1 = str_split($string1);
    $arrayString2 = str_split($string2);

    if (count($arrayString1) != count($arrayString2)) {
        return false;
    }

    $string1Count = [];
    $string2Count = [];
    foreach ($arrayString1 as $s1) {
        $string1Count[$s1] = isset($string1Count[$s1]) ? $string1Count[$s1] + 1 : 1;
    }

    foreach ($arrayString2 as $s2) {
        $string2Count[$s2] = isset($string2Count[$s2]) ? $string2Count[$s2] + 1 : 1;
    }

    foreach ($string1Count as $index => $s1c) {
        if ($string1Count[$index] != $string2Count[$index]) {
            return false;
        }
    }
    return true;
}

var_dump(validAnagram($string1, $string2));


function validAnagram2($string1, $string2)
{
    $arrayString1 = str_split($string1);
    $arrayString2 = str_split($string2);

    if (count($arrayString1) != count($arrayString2)) {
        return false;
    }

    $string1Count = [];
    foreach ($arrayString1 as $s1) {
        $string1Count[$s1] = isset($string1Count[$s1]) ? $string1Count[$s1] + 1 : 1;
    }

    foreach ($arrayString2 as  $value) {
        if (!$string1Count[$value]) {
            return false;
        } else {
            $string1Count[$value] -= 1;
        }
    }
    return true;
}

echo "validAnagram2";

var_dump(validAnagram2($string1, $string2));
