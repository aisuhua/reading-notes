# TCP 和 UDP

它们都属于传输层的协议，TCP（Transmission Control Protocol，传输控制协议），UDP（User Data Protocol，用户数据报协议）。

## TCP

TCP(Transmission Control Protocol) 传输控制协议,提供的是面向连接、可靠的字节流服务。当客户和服务器彼此交换数据前，必须先在双方之间建立一个TCP连接，之后才能传输数据。TCP提供超时重发，丢弃重复数据，检验数据，流量控制等功能，保证数据能从一端传到另一端。

应用： HTTP协议在传输层采用的就是TCP协议、SSH、FTP

## UDP

UDP( User Datagram Protocol ) 用户数据报协议，是一个简单的面向数据报的传输层协议。UDP不提供可靠性，它只是把应用程序传给IP层的数据报发送出去，但是并不能保证它们能到达目的地。由于UDP在传输数据报前不用在客户和服务器之间建立一个连接，且没有超时重发等机制，故而传输速度很快。

应用：腾讯QQ 、微信、网络电话、视频会议。

## 区别

- TCP面向连接（三次握手）；而UDP是无连接的，即发送数据之前不需要建立连接；
- TCP提供可靠的字节流服务。通过TCP连接传送的数据，无差错，不丢失，不重复，且按序到达；而UDP尽最大努力交付，即不保证可靠交付。
- TCP协议传输速度慢，UDP协议传输速度快。
- TCP有丢包重发机制，UDP没有。

## 参考文献

- [TCP与UDP的区别](http://blog.csdn.net/yipiankongbai/article/details/24435977)
- [TCP和UDP的区别以及应用有什么不同？](http://blog.csdn.net/dief913975849/article/details/6851615)