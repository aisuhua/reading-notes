# ArchLinux

## 跳板机

安装 xl2tpd

```shell
pacman -S xl2tpd
```

配置 xl2tpd

```shell
vim /etc/xl2tpd/xl2tpd.conf

[global]
access control = no
auth file = /etc/ppp/chap-secrets
debug avp = no
debug network = no
debug packet = no
debug state = no
debug tunnel = no

[lac demo]
lns = <b>YOUR_VPN_SERVER_IP</b>
redial = yes
redial timeout = 5
require chap = yes
require authentication = no
ppp debug = no
pppoptfile = /etc/ppp/peers/options.l2tpd.client.demo
require pap = no
autodial = yes

:wq
```

配置 ppp

```shell
vim /etc/ppp/peers/options.l2tpd.client.demo

noipdefault
ipcp-accept-local
ipcp-accept-remote
refuse-eap
require-mschap-v2
noccp
noauth
idle 1800
mtu 1410
mru 1410
defaultroute
usepeerdns
debug
connect-delay 5000
name <b>YOUR_VPN_USERNAME</b>
password <b>YOUR_PRE_SHARED_KEY</b>
logfile /var/log/l2tpd.client.demo.log

ipparam route:10.10.0.0/16,10.11.0.0/16,10.21.0.0/16,10.22.0.0/16,10.220.0.0/16

:wq
``` 

自定义路由规则 

```shell
vim /etc/ppp/ip-up.d/01-ipparam.sh

#!/bin/sh
  
if [ -n "${5}" -a -n "${6}" ]; then
   interface=${1}
   remoteip=${5}
   ipparams=(${6//;/ })
   for ipparam in ${ipparams[@]} ; do
       kv=(${ipparam//:/ })
       case ${kv[0]} in
           route)
               values=(${kv[1]//,/ })
               for value in ${values[@]} ; do
                   if [ `ip route | grep -c "${value}"` -eq 0 ]; then
                       ip route add ${value} via ${remoteip} dev ${interface} proto static
                   fi
               done
               ;;
           *)
               ;;
       esac
   done
fi
```

重启 xl2tpd

```shell
systemctl restart xl2tpd
```

查看网络状态 ppp0

```
ip link

1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN mode DEFAULT group default qlen 1000
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
2: enp2s0: <NO-CARRIER,BROADCAST,MULTICAST,UP> mtu 1500 qdisc fq_codel state DOWN mode DEFAULT group default qlen 1000
    link/ether 64:00:6a:3b:d5:c3 brd ff:ff:ff:ff:ff:ff
3: wlp3s0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc noqueue state UP mode DORMANT group default qlen 1000
    link/ether 68:14:01:4c:1e:4b brd ff:ff:ff:ff:ff:ff
4: ppp0: <POINTOPOINT,MULTICAST,NOARP> mtu 1410 qdisc noop state DOWN mode DEFAULT group default qlen 3
    link/ppp 
```

此时跳板机就可以登陆上了。




