# include 和 require 的区别

共同点：两者都是把外部文件（代码片段）包含到本脚本中来。

include 和 require 的区别在于它们如何处理错误：

- include 发生错误时，页面会报警告错误并停止执行包含文件，然后继续执行下面的代码；
- require 发生错误时，页面会报致命错误，并停止整个脚本的执行；

## include_once 和 require_once

include_once 和 require_once 能够保证同一个外部文件只被包含一次，所以它们更加安全，可以防止重复包含文件而导致类名或函数名冲突的情况。所以在项目中推荐使用这两个语句，虽然它们会额外带来一些系统开销，但基本可以忽略不计。

`注：额外的系统开销指的每次包含文件之前，都需要检测该文件是否被包含过。`

## 例子

```php
include('not_exists.php');
//Warning: include(): Failed opening 'not_exists.php'

echo 'I will execute.';


require('not_exists.php');
//Fatal error: require(): Failed opening required 'not_exists.php'

echo 'I can\'t execute.';
```