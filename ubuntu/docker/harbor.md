# Harbor

搭建一个私有 Register：

1. 安装 [docker-compose](https://docs.docker.com/compose/install/)
2. 下载并安装 [harbor](https://github.com/vmware/harbor)
3. 基本使用

## 安装 docker-compose

详细安装步骤请看：[Install Docker Compose](https://docs.docker.com/compose/install/)。

```shell
curl -L https://github.com/docker/compose/releases/download/1.8.0/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose

chmod +x /usr/local/bin/docker-compose

# 有时候，你需要创建一个软链接
ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose

# 查看是否安装成功
docker-compose --version
```

## 下载并安装 harbor

### 下载

```shell
# 下载
wget https://github.com/vmware/harbor/releases/download/0.4.1/harbor-online-installer-0.4.1.tgz
# 解压
tar -zxvf harbor-online-installer-0.4.1.tgz
```
### 初始化配置

```shell
# 配置 harbor
vi harbor.cfg

hostname=register.suhua123.com

# 配置 docker
vi /etc/docker/daemon.json

{
	"insecure-registries": ["register.suhua123.com"],
}

# 配置 hosts
vi /etc/hosts

127.0.0.1 register.suhua123.com
```

### 启动

```shell
# 启动（第一次启动如果没有安装就会执行安装）
docker-compose up -d

# 退出
docker-compose down

# 卸载
docker-compose rm
rm -r /data/database
rm -r /data/registry
```

## 基本使用

Harbor 启动后，就可以在浏览器中输入地址：register.suhua123.com 查看搭建好的 Register。默认的账号密码是：admin / Harbor12345。

把镜像推送到 Register，首先需要创建一个项目，默认 Harbor 就创建了一个叫做 library 的项目，我们可以直接把本地的镜像推送到该项目上或者自己新创建的项目上。

```shell
# 登陆
docker login register.suhua123.com
Username:admin
Password:

# 推送镜像
docker tag f753707788c5 register.suhua123.com/library/ubuntu
docker push register.suhua123.com/library/ubuntu

# 拉取镜像
docker pull register.suhua123.com/library/ubuntu
```



