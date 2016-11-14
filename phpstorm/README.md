# Phpstorm

## 快捷键

- ctrl + r 查看替换当前文件
- ctrl + shift + r 查看替换整个项目
- ctrl + shift + u 大小写切换
- ctrl + / 行注释
- ctrl + shift + / 块注释
- ctrl + d 复制当前行
- ctrl + y 删除当前行

## 技巧

- 切换项目所支持的 PHP 版本

  Settings -> Languages & Frameworks -> PHP -> Development Environment -> PHP language level

- 切换主题

  Settings -> Editor -> Colors & Fonts -> Scheme -> Solarized Light -> Font (Source code Pro 16px  Line spacing 1.0)

- 防止使用 sprintf 函数时，SQL 语句提示警告
	
	Settings -> Tools -> Database -> User parameters -> + Pattern (\%\w+) 

	如果你想指定 SQL 语句的检测语法，可以在 Settings -> Languages and Framework -> SQL Dialet -> SELECT eg.MySQL.

## 参考文献

- [如何使用 PhpStorm 測試與除錯?](http://oomusou.io/phpstorm/phpstorm-debug-testing/)
- [本地开发使用xdebug+phpstorm实现断点调试](http://www.ekan001.com/articles/27)
- [Avoid syntax error warnings when using string interpolation in SQL query generation](http://stackoverflow.com/questions/25529608/avoid-syntax-error-warnings-when-using-string-interpolation-in-sql-query-generat)
