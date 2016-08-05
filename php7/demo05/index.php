<?php

//function sample1(string $string , int $integer) {
//    return $string . $integer;
//}
//
//var_dump(sample1('suhua', '2'));
//执行正常

declare(strict_types=1);

function sample1(string $string , int $integer) {
    return $string . $integer;
}

var_dump(sample1('suhua', '2'));
//抛出异常：Uncaught TypeError: