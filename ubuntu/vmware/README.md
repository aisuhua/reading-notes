# VMware

## 开机自启动

为了增减对 Ubuntu 系统的熟悉度，希望开机后自动运行虚拟机，并全屏打开。设置方法如下：

### 前提

假如虚拟机的安装目录是：

```
C:\Users\suhua\Documents\Virtual Machines\Ubuntu-16.04-test\Ubuntu-16.04-test.vmx
```

Window 开机自启动目录是：

```
C:\ProgramData\Microsoft\Windows\Start Menu\Programs\StartUp
```

### 操作步骤

第一步：在桌面复制多一个 VMware 快捷方式，然后右键属性，在**目标**一项中填入以下内容：

```
"C:\Program Files (x86)\VMware\VMware Workstation\vmware.exe" -X "C:\Users\suhua\Documents\Virtual Machines\Ubuntu-16.04-test\Ubuntu-16.04-test.vmx"
```

第二步：把该快捷方式复制到 Window 开启自启动目录。这样就可以实现 VMware 开机自启动并运行指定虚拟机。

### 参考文献

1. [设置VMware随系统开机自动启动并引导虚拟机操作系统](http://blog.sina.com.cn/s/blog_53bec1ea01016n5r.html)
2. [VMware Workstation 10添加开机启动项自动启用虚拟机，如软路由](http://bbs.ikuai8.com/thread-17840-1-1.html)
