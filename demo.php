<?php

class Example
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}

$example = new Example;

$example('suhua');

var_dump(is_callable($example));

call_user_func($example, 'lala');

