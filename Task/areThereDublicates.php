<?php

$data = ['a', 'b', 'c'];


/**
 * areThereDuplicates
 * solve using Frequency Counter
 * @param  mixed $data
 * @return bool
 */
function areThereDuplicates($data): bool
{
    $num = [];
    for ($i = 0; $i < count($data); $i++) {
        if (isset($num[$data[$i]])) {
            return true;
        }
        $num[$data[$i]] = $data[$i];
    }
    return false;
}

var_dump(areThereDuplicates($data));
