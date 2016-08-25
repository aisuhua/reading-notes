<?php

/**
 * 冒泡排序
 *
 * @param $arr
 * @return mixed
 *
 * @see http://www.onmpw.com/tm/xwzj/algorithm_114.html
 */

function bubble_sort($arr)
{
    $end = count($arr) - 1;

    while ($end > 0) {

        for ($i = 0; $i < $end; $i++) {

            if ($arr[$i] > $arr[$i+1]) {

                $temp = $arr[$i];
                $arr[$i] = $arr[$i+1];
                $arr[$i+1] = $temp;

            }

        }

        $end --;
    }

    return $arr;
}

$arr = [8, 3, 9, 10, 1, 4];

var_dump(bubble_sort($arr));


