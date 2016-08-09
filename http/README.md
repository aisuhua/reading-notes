# HTTP

发展历史

- 1990 HTTP/0.9
- 1996 HTTP/1.0
- 1997 HTTP/1.1
- 2015 HTTP/2.0

## TCP/IP 通信传输流

详情见：《图解 HTTP》 1.3.3　TCP/IP 通信传输流

## 确保可靠性的 TCP 协议

按层次分，TCP 位于传输层，提供可靠的字节流服务。
所谓的字节流服务（Byte Stream Service）是指，为了方便传输，将大块数据分割成以报文段（segment）为单位的数据包进行管理。而可靠的传输服务是指，能够把数据准确可靠地传给对方。
一言以蔽之，TCP 协议为了更容易传送大数据才把数据分割，而且TCP 协议能够确认数据最终是否送达到对方。

为了准确无误地将数据送达目标处，TCP 协议采用了三次握手（three-way handshaking）策略。用TCP 协议把数据包送出去后，TCP不会对传送后的情况置之不理，它一定会向对方确认是否成功送达。握手过程中使用了TCP 的标志（flag）——SYN（synchronize）和ACK（acknowledgement）。

在HTTP/1.1 中，所有的连接默认都是持久连接。

持久连接使得多数请求以管线化（pipelining）方式发送成为可能。从前发送请求后需等待并收到响应，才能发送下一个请求。管线化技术出现后，不用等待响应亦可直接发送下一个请求。这样就能够做到同时并行发送多个请求，而不需要一个接一个地等待响应了。

## 内容压缩

- gzip（GNU zip）
- compress（UNIX系统的标准压缩）
- deflate（zlib）
- identity（不进行编码）

## HTTPS

HTTP+ 加密 + 认证 + 完整性保护 = HTTPS

与 SSL 组合使用的 HTTP 被称为 HTTPS（HTTP Secure，超文本传输安全协议）或 HTTP over SSL。

HTTPS 并非是应用层的一种新协议。只是 HTTP 通信接口部分用 SSL（Secure Socket Layer）和 TLS（Transport Layer Security）协议代替而已。
通常，HTTP 直接和 TCP 通信。当使用SSL 时， 则演变成先和 SSL 通信，再由SSL 和TCP 通信了。简言之，所谓HTTPS，其实就是身披 SSL 协议这层外壳的HTTP。

## SSL

## 缓存机制

- [浅谈浏览器HTTP的缓存机制](http://www.codeceo.com/article/broswer-http-cache.html)












