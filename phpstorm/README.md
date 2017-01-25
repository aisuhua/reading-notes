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

## 支持中文

在 phpstorm.sh 中加入以下内容

```shell
# 省略原来的代码
CLASSPATH="$CLASSPATH:$IDE_HOME/lib/jna.jar"
if [ -n "$WEBIDE_CLASSPATH" ]; then
  CLASSPATH="$CLASSPATH:$WEBIDE_CLASSPATH"
fi
# ------需要加入的代码begin-----------
XMODIFIERS="@im=fcitx"
export XMODIFIERS
# ------需要加入的代码end----  一定要在 # Run the IDE. 的前面的如何地方  -------
# ---------------------------------------------------------------------
# Run the IDE.
# ---------------------------------------------------------------------
# 省略原来的代码
```

## 参考文献

- [如何使用 PhpStorm 測試與除錯?](http://oomusou.io/phpstorm/phpstorm-debug-testing/)
- [本地开发使用xdebug+phpstorm实现断点调试](http://www.ekan001.com/articles/27)
- [Avoid syntax error warnings when using string interpolation in SQL query generation](http://stackoverflow.com/questions/25529608/avoid-syntax-error-warnings-when-using-string-interpolation-in-sql-query-generat)
- [ubuntu下phpstorm无法输入中文的解决办法](http://blog.csdn.net/sakurallj/article/details/52181084)
