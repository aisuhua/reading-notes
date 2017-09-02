# ArchLinux

## 安装准备

### 下载镜像

下载镜像文件 [Download](https://www.archlinux.org/download/)

### 制作启动盘

插入U盘，查看它的设备名。

```shell
# df -h
```

用U盘替换 /dev/sdx，如 /dev/sdb。（不要加上数字，也就是说，不要键入 /dev/sdb1 之类的东西)

```shell
# dd bs=4M if=/path/to/archlinux.iso of=**/dev/sdx** status=progress && sync
``` 

参考：[USB flash installation media](https://wiki.archlinux.org/index.php/USB_flash_installation_media_(%E7%AE%80%E4%BD%93%E4%B8%AD%E6%96%87))、[Category:Getting and installing Arch](https://wiki.archlinux.org/index.php/Category:Getting_and_installing_Arch_(%E7%AE%80%E4%BD%93%E4%B8%AD%E6%96%87))。

### U 盘启动

进入 BIOS，调整启动顺序，调整为U盘启动。

参考：[DELL vostro23-3340 BIOS设置Usb优盘启动方法](https://wenku.baidu.com/view/4d8a6727fd0a79563c1e72e3)

### 连接到因特网

#### 有线网络

有线网络一般就自动联网，查看网络状态。

```shell
# ping -c 3 www.baidu.com
```

#### 无线网络

查看无线网卡名称，一般形如 **wlp3s0**。

```shell
# ip link 
```

连接 WIFI

```shell
# ip link set WLAN up
# wpa_supplicant -B -i WLAN -c <(wpa_passphrase SSID KEY)
# dhcpcd WLAN
```

说明

- WLAN 网卡名称
- SSID WIFI 名称
- KEY WIFI 密码

### 更新系统时间

```shell
# timedatectl set-ntp true

# 检查服务状态
# timedatectl status
```

### 建立硬盘分区

查看硬盘状态

```shell
# fdisk -l
```

分区

```
fdisk /dev/sda
```

至少包含一个根分区和一个swap分区

### 格式化分区

将除了 swap 分区外的其他分区进行格式化

```shell
# mkfs.ext4 /dev/sda1
```

### 挂载分区

#### 挂载数据分区

首先将根分区挂载到 /mnt，例如：

```shell
# mount /dev/sda1 /mnt
```

挂载其他分区

```shell
# mkdir /mnt/home
# mount /dev/sda3 /mnt/home

# mkdir /mnt/www
# mount /dev/sda4 /mnt/www
```

#### 挂载 swap 分区

```shell
# mkswap /dev/sda2
# swapon /dev/sda2
```

查看结果

```shell
# df -h
# free -h
```

## 安装

### 选择镜像

将国内的镜像提到该文件的最前面即可。

```shell
/etc/pacman.d/mirrorlist
```

### 安装基本系统

执行 pacstrap 脚本，安装 base 组：

```shell
# pacstrap /mnt base
```

如果您想通过 AUR (简体中文) 或者 ABS (简体中文) 编译安装软件包，需要装上 base-devel：

```shell
# pacstrap -i /mnt base base-devel
```

至此，ArchLinux 安装完毕。





