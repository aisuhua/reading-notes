<?php

//@see http://php.net/manual/zh/language.operators.comparison.php#language.operators.comparison.ternary

$_GET['name'] = null;

//三元操作符PHP 5.3
$name1 = $_GET['name'] ?: 'suhuazizi';

//三元操作符PHP 7.0
$name2 = $_GET['name'] ?? 'suhuazizi';

var_dump($name1);
var_dump($name2);

//string(9) "suhuazizi"
//string(9) "suhuazizi"
