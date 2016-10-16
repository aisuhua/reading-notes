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
:wq

# 查看替换后的内容
grep -v "^#" /etc/apt/sources.list

# 替换后的 source.list
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

## 装梯子

需要的工具 [shadowsocks-qt5](https://github.com/shadowsocks/shadowsocks-qt5)，[GenPAC](https://github.com/JinnLynn/genpac)，[polipo](https://www.irif.univ-paris-diderot.fr/~jch/software/polipo/)，[Proxy SwitchyOmega](https://chrome.google.com/webstore/detail/proxy-switchyomega/padekgcemlokbadohgkifijomclgjgif) （可选）。

### 安装 shadowsocks-qt5

```shell
add-apt-repository ppa:hzwhuang/ss-qt5
apt-get update
apt-get install shadowsocks-qt5
```

配置 shadowsocks。可以通过命令打开 `ss-qt5` 或者在应用中搜索，在弹出的界面中，按照要求填写相关参数就可以。具体步骤如下：Connetion -> Add -> Manually -> 按照求填写参数，建议把 Auto connect on application start 勾上 -> Ok。然后点击 Connect 即可连接 VPN。

开机自启动

打开 Startup applications，添加一个开机子启动程序，Name 填写 shadowsocks-qt5，Command 填写 /usr/bin/ss-qt5，保存即可。下次开机时，它就会自启动，加上之前设置的启动自动连接网络，那么每次重启，VPN 都是有效的。

### 安装 GenPAC

安装 pip 和 genpac。genpac 的作用是生成一个 autoproxy.pac 文件，这个文件中定义了哪一些网站需要爬梯，哪一些是无需爬梯的，所以它的好处的按需爬梯，不需要每次爬梯。

```shell
apt-get install python-pip
pip install genpac
```

生成 autoproxy.pac 文件 

```shell
cd /home/suhua/Documents/
genpac -p "SOCKS5 127.0.0.1:1080" --gfwlist-proxy="SOCKS5 127.0.0.1:1080" --output="autoproxy.pac" --gfwlist-url="https://raw.githubusercontent.com/gfwlist/gfwlist/master/gfwlist.txt"
```

### 设置全局网络使用 VPN

System Settings -> Networks -> Network Proxy -> Select Method(Automatic) -> Fill in Configuration URL: "file:///home/suhua/Documents/autoproxy.pac" -> Apply system wide -> Enter password. 

此时，你打开任意一款浏览器，都可以科学上网了。但是在 shell 中使用 wget/ping/curl 等等命令是依然被墙的，那么我们需要把 scoket5 代理转换为 HTTP 代理才行，需要用到下面这个工具。

### 安装 polipo

这款软件能够把 socket 代理转换成 http 代理，从而使得不止是浏览器能够上网，shell 的其他命令也会奏效。

安装 

```shell
apt-get install polipo
```

修改配置文件

```shell
vi /etc/polipo/config

# 填入以下内容
logSyslog = true
logFile = /var/log/polipo/polipo.log

proxyAddress = "0.0.0.0"

socksParentProxy = "127.0.0.1:1080"
socksProxyType = socks5

chunkHighMark = 50331648
objectHighMark = 16384

serverMaxSlots = 64
serverSlots = 16
serverSlots1 = 32

:wq
```

重启 polipo，使配置文件生效

```shell
/etc/init.d/polipo restart
```

使用 polipo 提供的 http 代理，值注意的是 polipo 服务的端口是 `8123`，所以 http 代理的完整地址是 http://127.0.0.1:8123/。

为终端配置http代理

```shell
export http_proxy="http://127.0.0.1:8123/"
# https 可选
export https_proxy="http://127.0.0.1:8123/"
```

测试能否爬梯

```shell
curl www.google.com
```

如果有内容返回，则说明爬梯成功。如果需要取消 http 代理，可以使用命令 `export http_proxy=""`。其实很多时候是用不到梯子的，因为大多数源国内都有，所以在使用完代理后，记得取消，不然会出现所有命令都走代理的情况。

### Proxy SwitchyOmega

实际上，由于上面已经设置了全局 VPN，所以这款 chrome 浏览器插件就没有必要装了，不过它比全局设置会更加容易管理，可以随时添加一些不能访问的网站到白名单当中，所以这里说一下。

首先安装 SwitchyOmega，[扩展下载地址](https://chrome.google.com/webstore/detail/proxy-switchyomega/padekgcemlokbadohgkifijomclgjgif)，具体的配置过程，可以参考后面几篇参考文献。


### 优化虚拟机

修改虚拟机的几个配置，打开配置文件 C:\ProgramData\VMware\VMware Workstation\settings.ini。修改如下：

```
printers.enabled = "FALSE"

mainMem.useNamedFile = "FALSE"

logging = "FALSE"
snapshot.disabled = "TRUE"
MemTrimRate = "0"
sched.mem.pshare.enable = "FALSE"
MemAllowAutoScaleDown = "FALSE"
prefvmx.useRecommendedLockedMemSize = "TRUE"

isolation.tools.unity.disable = "TRUE"
unity.allowCompositingInGuest = "FALSE"
unity.enableLaunchMenu = "FALSE"
unity.showBadges = "FALSE"
unity.showBorders = "FALSE"
unity.wasCapable = "FALSE"
```

实际上，这样做只想解决虚拟机读写硬盘过多而造成死机的问题。不过虽然这样配置，实际上效果不太大的，后来是通过给虚拟机分配更多的内存而解决该问题的。具体可以参考后面的几篇参考文章。

## 安装常用软件

### vim 支持中文

安装 vim 的完整版

```shell
apt-get install vim
```

### 谷歌浏览器

```shell
wget https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb

# 安装
dpkg -i google-chrome-stable_current_amd64.deb
# 解决依赖问题，然后再安装
apt-get install -f
```

### 搜狗输入法

```shell
wget http://cdn2.ime.sogou.com/dl/index/1465191139/sogoupinyin_2.0.0.0078_amd64.deb

# 安装
dpkg -i sogoupinyin_2.0.0.0078_amd64.deb
# 解决依赖问题，然后再安装
apt-get install -f
```

## 其他优化

### 开机不需要输入账号密码

System settings - User accounts - Unlock - Automatic login (On) - Lock .

输入法安装后，需要把它添加到可用输入法中才能使用，具体步骤如下：System Settings -> Language Support -> Keyboard input method system [fcitx]。接着就可以重启电脑了。

电脑重启完后，还是没有看到搜狗输入法，此时，你可以点击右上角的键盘图形，在弹出来的窗口中，点击 + 号，然后把一个勾去掉，搜索 sogou，把它添加进去。此时你再切换输入法，就可以看到了。

## 参考文献

- [Ubuntu15.04配置静态IP和DNS](http://blog.csdn.net/crave_shy/article/details/48518011)
- [Set static IP Ubuntu 16.04](http://askubuntu.com/questions/766131/set-static-ip-ubuntu-16-04)
- [Network Configuration](https://help.ubuntu.com/lts/serverguide/network-configuration.html)
- [Ubuntu server命令行配置shadowsocks全局代理](https://jingsam.github.io/2016/05/08/setup-shadowsocks-http-proxy-on-ubuntu-server.html)
- [ubuntu 14 安装 shadowsocks-qt5 并配置 pac 全局代理](http://blog.csdn.net/weiqiangsu/article/details/46956977/)
- [Ubuntu14.04使用Shadowsocks及转换HTTP代理](http://blog.csdn.net/xhhjin/article/details/46594713)
- [使用Privoxy将socks5代理转为http代理](https://blog.phpgao.com/privoxy-shadowsocks.html)
- [ubuntu:(设置终端代理IP)简单有效地设置全局代理上网](http://jileniao.net/set-global-proxy-for-ubuntu.html)
- [终端走代理的几种方法](http://blog.csdn.net/u014015972/article/details/50647019)
- [谷歌浏览器Chrome+ShadowSocks+Proxy SwitchyOmega自动翻墻教程](https://ii-i.org/archives/289)
- [ubuntu 14 安装 shadowsocks-qt5](http://blog.sina.com.cn/s/blog_535c4b000102wj0u.html)
- [VMware Performance Enhancing Tweaks (Over-the-Counter Solutions)](http://artykul8.com/2012/06/vmware-performance-enhancing/)
- [关于开启虚拟机磁盘利用率100%问题](http://tieba.baidu.com/p/4612619858)

