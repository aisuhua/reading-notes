<?php

/**
 * 二分查找（折半查找）
 * @param $arr
 * @param $target
 * @return bool|float
 *
 * @see http://www.cnblogs.com/zemliu/archive/2012/08/22/2650116.html
 */

function binary_search($arr, $target)
{
    $low = 0;
    $high = count($arr) - 1;

    while($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if($arr[$mid] > $target) { //中元素比目标大，查找左部
            $high = $mid - 1;
        } elseif ($arr[$mid] < $target) { //中元素比目标小，查找右部
            $low = $mid + 1;
        } else {
            return $mid;
        }
    }

    //查找失败
    return false;
}

$arr = array(1, 3, 5, 7, 9, 11);
$index = binary_search($arr, 9);
var_dump($index);