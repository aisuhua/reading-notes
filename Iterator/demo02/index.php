<?php

function loop(array $arr)
{
    foreach ($arr as $value) {
        yield $value;
    }
}

$arr = [
    [
        'name' => 'suhua'
    ],
    [
        'name' => 'bbbb'
    ],
    [
        'name' => 'aaaa'
    ]
];

//$loop 是迭代器
$loop = loop($arr);

foreach ($loop as $value) {
    var_dump($value);
}

