# Docker

## 安装

安装过程并不复杂，但是要注意以下自己系统的版本号，具体参考 [Installation on Ubuntu](https://docs.docker.com/engine/installation/linux/ubuntulinux/)。

如果被墙的话，可以通过阿里云镜像进行安装，安装方法请看 http://mirrors.aliyun.com/help/docker-engine

通过国内镜像安装的方法如下：

```shell
curl -sSL http://acs-public-mirror.oss-cn-hangzhou.aliyuncs.com/docker-engine/internet | sh -
```

## 下载镜像

实际上，下载的命令很简单，不过很不走运，你依然可能被墙，此时依然求组于国内镜像，使用方法具体请看[配置 Docker 加速器](https://cr.console.aliyun.com/)。

令 Docker 默认使用国内镜像的方法：

```shell
mkdir -p /etc/systemd/system/docker.service.d
vi /etc/systemd/system/docker.service.d/mirror.conf

[Service] 
ExecStart= 
ExecStart=/usr/bin/docker daemon -H fd:// --registry-mirror=https://qby02i3s.mirror.aliyuncs.com

:wq

systemctl daemon-reload
systemctl restart docker
```

## 运行第一个容器

我们给即将运行的容器指定了 DNS 服务器，这个很重要，关系到你是否能够上网。

```
# 简单一个容器
docker run --name first_container --dns 223.5.5.5 --dns 223.6.6.6 -i -t ubuntu /bin/bash

# 挂载主机目录到容器中
docker run --name first_container --dns 223.5.5.5 --dns 223.6.6.6 -v /www/web:/www/web -i -t ubuntu /bin/bash
```

此时， 第一个容器已经运行，并且打开了一个 shell 进行交互。如果使用 `exit` 命令退出 shell 的时候，容器随即停止运行。

如果想再次启动该容器，可以使用命令：

```shell
docker start first_container
```

容器启动后，会已守护进程的方式运行，此时你可以使用以下两种方式再次于 Docker 进行交互：

```shell
# 在指定容器里执行命令
docker exec -it first_container /bin/bash

# 附着到制定的容器上
docker attach first_container 
```

值得注意的是通过 `docker attach` 命令附着上的容器，一旦退出 shell 交互界面，那么该容器会随即退出。这与通过在容器中执行命令进入容器的方式不太一样。

## Docker DNS 問題

上面提到過在使用 `docker run` 命令运行容器时，需要指定 `--dns` 参数。其实，除了该方法之外，我们可以对 Docker 进行全局配置。配置方法如下：

```shell
vi /etc/docker/daemon.json

{
    "dns": ["233.5.5.5", "223.6.6.6"]
}

:wq
```

查看 daemon.json 文件的更多配置项可以参考 [linux-configuration-file](https://docs.docker.com/engine/reference/commandline/dockerd/#/linux-configuration-file)。

修改完成后，重启以下 Docker 守护进程，那么以后每次创建的容器都是使用这些 dns。

```shell
service docker restart
```

## 搭建私有的 Register

可以参考以下两个镜像：

1. 官方提供的简易版 [Register](https://hub.docker.com/_/registry/)，没有管理界面，只提供相关的 API；
2. 网友做的管理界面 [hyper/docker-registry-web](https://hub.docker.com/r/hyper/docker-registry-web/)；
3. 企业版管理界面 [vmware/harbor](https://github.com/vmware/harbor/)；

## 常见问题

1. 容器关闭后，里面的数据（比如所安装的软件）会丢失吗？ 

    答：是不会的。只有在删除容器后，里面的数据才会被删除。

## 参考文献


