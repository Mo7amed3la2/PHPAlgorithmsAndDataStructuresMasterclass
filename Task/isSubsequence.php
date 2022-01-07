<?php

$string1 = 'sing';
$string2 = 'sting';

/**
 * isSubsequence
 *
 * @param  mixed $string1
 * @param  mixed $string2
 * @return bool
 */
function isSubsequence($string1, $string2): bool
{
    $string1Array = str_split($string1);
    $string2Array = str_split($string2);

    $look = 0;
    for ($i = 0; $i < count($string2Array); $i++) {
        if ($string2Array[$i] == $string1Array[$look]) {
            $look++;
        }
        if ($look == count($string1Array)) return true;
    }
    return false;
}

var_dump(isSubsequence($string1, $string2));
