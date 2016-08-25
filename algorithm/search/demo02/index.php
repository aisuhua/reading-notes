<?php

/**
 * 顺序查找
 * @param $arr
 * @param $target
 * @return bool|int
 */
function sequence_search($arr, $target)
{
    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] == $target) {
            return $i;
        }
    }

    return false;
}

$arr = array(1, 3, 5, 7, 9, 11);
$index = sequence_search($arr, 9);
var_dump($index);