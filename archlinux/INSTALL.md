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

**有线网络**

有线网络一般就自动联网，查看网络状态。

```shell
# ping -c 3 www.baidu.com
```

**无线网络**

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

**挂载数据分区**

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

**挂载 swap 分区**

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
# vim /etc/pacman.d/mirrorlist
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

## 配置系统

### Fstab

用以下命令生成 fstab 文件:

```shell
# genfstab -U /mnt >> /mnt/etc/fstab
```

强烈建议 在执行完以上命令后，后检查一下生成的 /mnt/etc/fstab 文件是否正确。

### Chroot

Change root 到新安装的系统：

```shell
# arch-chroot /mnt
```

此时，你已经进入了全新的 ArchLinux 系统了。

## 时区

设置 时区:

```shell
# ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime
```

建议设置时间标准 为 UTC，并调整 时间漂移:

```shell
# hwclock --systohc --utc
```

### Locale

去掉以下注释：

```shell
# vim /etc/locale.gen

en_US.UTF-8 UTF-8
zh_CN.UTF-8 UTF-8
zh_TW.UTF-8 UTF-8

:wq
```

接着执行locale-gen以生成locale讯息：

```shell
# locale-gen
```

创建 locale.conf 并提交您的本地化选项：

```shell
# echo LANG=en_US.UTF-8 > /etc/locale.conf
```

### 主机名

要设置 hostname，将其添加 到 /etc/hostname, myhostname 是需要的主机名:

```shell
# echo myhostname > /etc/hostname
```

建议添加对应的信息到hosts(5):

```shell
# vim /etc/hosts

127.0.0.1	localhost.localdomain	localhost
::1		localhost.localdomain	localhost
127.0.1.1	myhostname.localdomain	myhostname
```

### 网络配置

无线网络需安装 `wpa_supplicant` 软件包

```shell
# pacman -S wpa_supplicant
```

### Initramfs

如果修改了 mkinitcpio.conf，用以下命令创建一个初始 RAM disk：

```shell
# mkinitcpio -p linux
```

### Root 密码

设置 root 密码:

```shell
# passwd
```


### 安装引导程序

```shell
# grub-install --target=i386-pc /dev/sdx
# grub-mkconfig -o /boot/grub/grub.cfg
```

### 重启

输入 exit 或按 Ctrl+D 退出 chroot 环境。

可选用 umount -R /mnt 手动卸载被挂载的分区：这有助于发现任何“繁忙”的分区，并通过 fuser(1) 查找原因。

最后，通过执行 reboot 重启系统：systemd 将自动卸载仍然挂载的任何分区。不要忘记移除安装介质，然后使用root帐户登录到新系统。

## 桌面系统

### 显卡驱动

如果不知道显卡类型，请执行如下命令进行查询：

```shell
$ lspci | grep -e VGA -e 3D
```

安装相应显卡

```shell
# pacman -S xf86-video-ati
```

###  Xorg

安装 xorg 

```shell
# pacman -S xorg-server
```

### 安装桌面管理器

安装 Gnome

```shell
# pacman -S gnome gnome-extra
# systemctl enable gdm
# reboot
```

重启后，即可进入桌面环境。

### 中文字体

```shell
# pacman -S wqy-microhei
```

### 输入法

安装输入法

```shell
# pacman -S fcitx fcitx-im fcitx-sunpinyin fcitx-configtool
```

Gnome 需要做以下配置，才能正常切换输入法：

```shell
# vim /etc/environment

export GTK_IM_MODULE=fcitx
export QT_IM_MODULE=fcitx
export XMODIFIERS=@im=fcitx

:wq
```

## 参考文献

1. [Installation guide](https://wiki.archlinux.org/index.php/Installation_guide_(%E7%AE%80%E4%BD%93%E4%B8%AD%E6%96%87)#.E9.80.89.E6.8B.A9.E9.95.9C.E5.83.8F)
2. [Xorg](https://wiki.archlinux.org/index.php/Xorg_(%E7%AE%80%E4%BD%93%E4%B8%AD%E6%96%87))
3. [GNOME](https://wiki.archlinux.org/index.php/GNOME_(%E7%AE%80%E4%BD%93%E4%B8%AD%E6%96%87))
4. [ArchLinux 的安装经历](http://blog.sina.com.cn/s/blog_6018427d0102wyl5.html)
5. [ArchLinux安装笔记](http://blog.csdn.net/zhyh1986/article/details/40709389)
6. [Fcitx](https://wiki.archlinux.org/index.php/Fcitx_(%E7%AE%80%E4%BD%93%E4%B8%AD%E6%96%87))







