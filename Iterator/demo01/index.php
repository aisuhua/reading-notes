<?php

function myGenerator()
{
    for($i = 1; $i <= 10; $i++) {
        yield $i;
    }
}

$myGenerator = myGenerator();

foreach ($myGenerator as $value) {
    echo $value, '<br>';
}