<?php
$str = '书名页	1
版权页	2
作者简介	3
前言	4
目录	10
第一部分 Web 服务简介	14
	第一章 简介	15
		Web 服务简介	16
		Web 服务体系结构	21
		XML 消息接发	26
		服务描述：WSDL	29
		服务发现：UDDI	31
		服务传输	32
		安全性考虑	34
		总体观察	36
		标准和一致	38
第二部分 XML-RPC	39
	第二章 XML-RPC 精髓	40
		XML-RPC 概览	40
		为什么选择XML-RPC？	41
		XML-RPC 技术概览	42
		用XML-RPC 开发服务	52
		超越简单调用	58
第三部分 SOAP	60
	第三章 SOAP 精髓	61
		SOAP 101	62
		SOAP 消息	64
		SOAP 编码	68
		SOAP 通过HTTP 传输	73
		SOAP 和W3C	76
		SOAP 实现	77
	第四章 Apache SOAP 快速入门	79
		安装Apache SOAP	79
		Hello,SOAP!	82
		部署SOAP 服务	93
		TcpTunnelGui 工具	98
		Web 资源	101
	第五章 Apache SOAP 编程	102
		使用数组	103
		使用JavaBean	108
		使用直接XML 文档	119
		处理SOAP 故障	126
		维持会话状态	132
第四部分 WSDL	138
	第六章 WSDL 精髓	139
		WSDL 规范	140
		基本的WSDL 例子：HelloService.wsdl	142
		WSDL 调用工具之一	148
		基本的WSDL 例子: XMethods eBay Price Watcher Service	152
		WSDL 调用工具之二	154
		自动生成WSDL 文件	158
		XML Schema 的数据类型定义	162
第五部分 UDDI	178
	第七章 UDDI 精髓	179
		UDDI 简介	179
		为什么选择UDDI？	181
		UDDI 技术回顾	183
		UDDI 数据模型	183
		搜索UDDI	191
		向UDDI 发布	207
		UDDI 实现	223
		Web 资源	224
	第八章 UDDI 查询 API 快速参考	225
		UDDI 查询API	226
		查找限定符	248
	第九章 UDDI 4J	250
		准备工作	250
		发现和获取UDDI 数据	251
		发布UDDI 数据	259
		UDDI4J 快速参考API	263
词汇表	308
';

//$pattern = '/(.*)\s+000(.*)(\n)/';
//
//$str = '关注图灵	257
//		B.4　Your Gists	254
//					Gist的菜单	252
//';
//
//preg_match_all($pattern, $str, $matches);
//
//var_dump($matches);
//exit;

$pattern = '/(.*)\s+[-p\d]+[\r\n]/';
$pattern = '/(.*)\s+[-p\w\.\*\d]+[\r\n]/';
$pattern = '/(.*)\s+[-p\w\.\*_:\d]+[\r\n]/';
$replacement = '${1}${3}';

echo
'<pre>',
(preg_replace($pattern, $replacement, $str)),
'</pre>';
