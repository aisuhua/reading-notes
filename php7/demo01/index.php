<?php

//标量类型声明
function sum1(int ...$ints) {
    return array_sum($ints);
}

var_dump(sum1(1, 2, 3));
//int(6)


//返回类型声明
function sum2(int ...$ints): float {
    return array_sum($ints);
}

var_dump(sum2(1, 2, 3));
//float(6)


//自定义返回类型声明
class C
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

function Obj(string $name): C {
    return new C($name);
}

var_dump(Obj('suhua'));
//object(C)#1 (1) { ["name":protected]=> string(5) "suhua" }