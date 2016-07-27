<?php

function __autoload($class) {
    echo 'Want to load class ' . $class;

    throw new \Exception($class . ' is not exists.');
}

try {

    new Dog();

} catch (\Exception $e) {
    echo ($e->getMessage());
}

//Want to load class Dog
//Dog is not exists.