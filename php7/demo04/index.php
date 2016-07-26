<?php

echo $a;

echo 100 / 0;

try {

    echo Dog();

//可以再这里捕捉到 Fatal error 错误
} catch (Throwable $e) {
    var_dump($e);
}


