# PHP7.0

## 新特征

### 标量类型声明（参数类型声明）

两种模式：强制（默认）模式、严格模式。

开启严格模式：

```php
declare(strict_types=1);
```

```php
function sum(int ...$ints) {
    return array_sum($ints);
}

var_dump(sum(1, 2, 3));
``

### 返回类型声明

可用的返回类型与参数类型中可用的类型相同。

```
function sum2(int ...$ints): float {
    return array_sum($ints);
}

var_dump(sum2(1, 2, 3));
```

### 错误及异常处理

把错误(Fatal Error like ParseError)转换为可捕捉的异常（核心错误可以通过异常捕获）。

### 匿名类

可以通过 new 关键字初始化一个匿名类。匿名类使用场景与完整的类场景相同。

## 新的运算符

??

## 未知的问题

- 对 Unicode 的支持
- QPS
- AST
- Zend Engine 3

## 附录

- [10年漫長等待，PHP 7終於問世](http://www.ithome.com.tw/news/101599)
- [PHP7革新与性能优化](http://hansionxu.blog.163.com/blog/static/24169810920158704014772/)
- [PHP7新特性的介绍](https://segmentfault.com/a/1190000003893899)
- [5 New Features in PHP 7](http://blog.teamtreehouse.com/5-new-features-php-7)
- [PHP 7向下不相容問題說明文件](http://php.net/manual/en/migration70.incompatible.php)

