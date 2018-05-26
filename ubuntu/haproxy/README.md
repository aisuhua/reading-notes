# HAProxy

```
apt-get install haproxy
haproxy --version
sudo vim /etc/haproxy/haproxy.cfg 

frontend haproxynode
    bind *:5670
    mode tcp
    default_backend backendnodes

backend backendnodes
    mode tcp
    balance roundrobin
    server devops 192.168.31.10:5672 check inter 2000 rise 2 fall 3
    server huidu 192.168.31.20:5672 check inter 2000 rise 2 fall 3
    server web0 192.168.31.100:5672 check inter 2000 rise 2 fall 3

# listen rabbitmq_local_cluster
#    mode tcp
#    bind *:5670
#    balance roundrobin
#    server devops 192.168.31.10:5672 check inter 2000 rise 2 fall 3
#    server huidu 192.168.31.20:5672 check inter 2000 rise 2 fall 3
#    server web0 192.168.31.100:5672 check inter 2000 rise 2 fall 3

listen stats
    bind :32700
    mode http
    option httplog
    stats enable
    stats uri /stats
    stats refresh 5s
```

http://192.168.31.111:32700/stats

- [反向代理为何叫反向代理？](https://www.zhihu.com/question/24723688)
- [Difference between frontend/backend and listen in haproxy](https://stackoverflow.com/questions/39209917/difference-between-frontend-backend-and-listen-in-haproxy)
- [Examples](http://cbonte.github.io/haproxy-dconv/1.6/configuration.html#2.5)
- [How to Use HAProxy for Load Balancing](https://www.linode.com/docs/uptime/loadbalancing/how-to-use-haproxy-for-load-balancing/)
- [通过haproxy 配置rabbitmq消息队列主从](https://blog.csdn.net/lsb2002/article/details/53931292)
- [【原】HAProxy 做rabbitmq的高可用](https://www.jianshu.com/p/7a3142335518)
- [haproxy 教程](https://blog.csdn.net/huithe/article/details/13971847)
- [HAProxy配置相关](https://github.com/chenzhiwei/linux/tree/master/haproxy)
- [RabbitMQ high available cluster with docker and HAProxy](https://ypereirareis.github.io/blog/2017/04/03/rabbitmq-high-available-cluster-haproxy-docker/)