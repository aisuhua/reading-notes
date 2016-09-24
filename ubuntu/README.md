# Ubuntu

ubuntu 16.04 / VMware Workstation 12 / Window 10 

## 网络设置

刚安装好的 ubuntu 是不能连接上网的，虚拟机是通过桥接连接到 Win 10 的，按照以下步骤初始化网络。

配置静态IP

```shell
vi /etc/network/interfaces


# interfaces(5) file used by ifup(8) and ifdown(8)
auto lo
iface lo inet loopback

auto ens33
iface ens33 inet static
address 10.0.7.201
netmask 255.255.255.0
gateway 10.0.7.1

dns-nameservers 223.5.5.5

:wq

```

重启网络，使修改后的配置生效

```shell
/etc/init.d/networking restart
```

测试是否能够上网

```shell
ping www.baidu.com
```

注意：如果域名无法解析，那么查看以下当前的DNS服务器信息是否已经写入 /etc/resolv.conf 文件，如果没有请尝试再次重启网络。

## 使用国内源

由于 ubuntu 默认的源在国外服务器上，下载这些软件会比较慢，所以需要使用国内的源，内容是完全一样的。具体有那一些源可以参考[模板:16.04source](http://wiki.ubuntu.org.cn/%E6%A8%A1%E6%9D%BF:16.04source)，我们这里采用阿里云的源 http://mirrors.aliyun.com/ubuntu/。

备份旧源

```shell
mv /etc/apt/sources.list /etc/apt/sources.list.bak
```

把旧地址替换成阿里云的源地址

```shell

vi /etc/apt/sources.list

:%s/http:\/\/cn.archive.ubuntu.com\/ubuntu\//http:\/\/mirrors.aliyun.com\/ubuntu\//g

//替换后的结果如下

# grep -v "^#" /etc/apt/sources.list

deb http://mirrors.aliyun.com/ubuntu/ xenial main restricted

deb http://mirrors.aliyun.com/ubuntu/ xenial-updates main restricted

deb http://mirrors.aliyun.com/ubuntu/ xenial universe
deb http://mirrors.aliyun.com/ubuntu/ xenial-updates universe

deb http://mirrors.aliyun.com/ubuntu/ xenial multiverse
deb http://mirrors.aliyun.com/ubuntu/ xenial-updates multiverse

deb http://mirrors.aliyun.com/ubuntu/ xenial-backports main restricted universe multiverse

deb http://security.ubuntu.com/ubuntu xenial-security main restricted
deb http://security.ubuntu.com/ubuntu xenial-security universe
deb http://security.ubuntu.com/ubuntu xenial-security multiverse
```

然后刷新源

```shell
apt-get update
```

















