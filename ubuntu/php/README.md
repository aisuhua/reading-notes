# PHP

## 知识点

### 如何查看 PHP 的安装信息？

答：通过 phpinfo 查看 PHP 的详细安装信息，如下是一些最常关注的：

```ini
Loaded Configuration File	/etc/php5/fpm/php.ini
Scan this dir for additional .ini files	   /etc/php5/fpm/conf.d

Thread Safety	disabled

display_errors	On
error_reporting	22527

extension_dir	/usr/lib/php5/20131226
```

除此之外，可以通过命令 `which php` 查看 php 命令所在目录。

### 如何查看 CLI 所使用的 php.ini 配置文件？

答：CLI 和 php 进程所使用的是两个不一样的 php.ini 文件。可以通过命令 `php --ini` 查看 CLI 配置文件的位置。

一般当出现在 phpinfo 中有相关模块，而通过命令行 `php -m` 却没有，都是因为它们使用了不一样的配置文件所造成。请参考：http://bbs.csdn.net/topics/390939558
