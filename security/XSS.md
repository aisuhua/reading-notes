# XSS 攻击

跨站脚本攻击（Cross-Site Scripting，XSS）是指通过在存在安全漏洞的Web网站的浏览器内运行非法的HTML标签或JavaScript进行的一种攻击。

几个步骤：

1. 用户提交数据给服务器
2. 服务器把数据存入数据库
3. 把数据从数据库中提取出来，然后交给浏览器执行
4. 此时，攻击就有可能发生

跨站脚本攻击有可能造成以下影响：

- 利用虚假输入表单骗取用户个人信息；
- 利用脚本窃取用户的Cookie值，被害者在不知情的情况下，帮助攻击者发送恶意请求；
- 显示伪造的文章或图片；

## 防范方法

两种方法：

- 输入时去除 HTML 标签；
- 输出时把 HTML 标签转换为 HTML 实体；

输入时使用 `strip_tags` 去除 HTML 标签。

```php
//原生 PHP
$content = $_POST['content'];
$safe_content = strip_tags($content);

//Phalcon
$content = $this->request->getPost('content', 'striptags');
//或者
$content = $this->request->getPost('content', 'string');
```

输出时使用 `htmlspecialchars` 把 HTML 标签转换为 HTML 实体。

```php
//原生 PHP
$safe_content = htmlspecialchars($content);

//Phalcon
$safe_content = htmlspecialchars($content);

//Volt
{{content | e}}
//或者
{{content | escape}}
```

## 参考文献

- [There's more to HTML escaping than &, <, >, and "](http://wonko.com/post/html-escaping)
- 图解HTTP 11.2.1　跨站脚本攻击