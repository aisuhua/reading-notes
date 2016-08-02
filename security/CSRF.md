# CSRF

CSRF（Cross-site request forgery）跨站请求伪造，也被称为 'One Click Attack' 或者 'Session Riding'，通常缩写为 CSRF 或者 XSRF，是一种对网站的恶意利用。

绰号：冒充用户之手

CSRF 利用了一个网站对于已授权的用户的信任

## 防范方法

给每一个敏感操作添加 token 值，token 值每次都不一样。

## 参考文献

- [浅谈CSRF攻击方式 - 推荐](http://www.cnblogs.com/hyddd/archive/2009/04/09/1432744.html)
- [Preventing CSRF Attacks](http://blog.ircmaxell.com/2013/02/preventing-csrf-attacks.html)
- [Don't Worry About BREACH](http://blog.ircmaxell.com/2013/08/dont-worry-about-breach.html)
- [总结 XSS 与 CSRF 两种跨站攻击](https://blog.tonyseek.com/post/introduce-to-xss-and-csrf/)