## HTTP 简介

HTTP协议是Hyper Text Transfer Protocol（超文本传输协议）的缩写,是用于从万维网（WWW:World Wide Web ）服务器传输超文本到本地浏览器的传送协议。。

HTTP是一个基于TCP/IP通信协议来传递数据（HTML 文件, 图片文件, 查询结果等）

## HTTP 工作原理

HTTP协议工作于客户端-服务端架构上。浏览器作为HTTP客户端通过URL向HTTP服务端即WEB服务器发送所有请求。

Web服务器有：Apache服务器，IIS服务器（Internet Information Services）等。

Web服务器根据接收到的请求后，向客户端发送响应信息。

HTTP默认端口号为80，但是你也可以改为8080或者其他端口。

## HTTP三点注意事项：

- HTTP是无连接：无连接的含义是限制每次连接只处理一个请求。服务器处理完客户的请求，并收到客户的应答后，即断开连接。采用这种方式可以节省传输时间。
- HTTP是媒体独立的：这意味着，只要客户端和服务器知道如何处理的数据内容，任何类型的数据都可以通过HTTP发送。客户端以及服务器指定使用适合的MIME-type内容类型。
- HTTP是无状态：HTTP协议是无状态协议。无状态是指协议对于事务处理没有记忆能力。缺少状态意味着如果后续处理需要前面的信息，则它必须重传，这样可能导致每次连接传送的数据量增大。另一方面，在服务器不需要先前信息时它的应答就较快

## HTTP请求信息和响应信息的格式

### 请求
- 请求行 (请求方法 请求路径 所用协议 )
- 请求头信息 (key:value)
- 请求主体信息 (可选,是发送内容)(头信息结束后和主体信息之间要空一行)

> **(http只是一种协议,只要满足这个协议,什么工具都可以发,比如:telnet,postman)**
    
 #### 请求方法
 1. GET
 2. POST
 3. PUT
 4. DELETE
 5. TRACE
 6. OPTIONS (返回服务器可用的请求方法)
 7. HEAD (head和get基本相同,只是不返回内容)
> **(虽然上面的方法是http协议规定的,但是webserver不一定支持这些方法)**
[HTTP请求方法](http://www.runoob.com/http/http-methods.html)
 
 ### 响应
 - 响应行(协议 状态码 状态文字)
 - 响应头信息(key:value)
 - 主体信息 (头信息和主体信息之间有空行)
 
 #### HTTP 响应头信息
 
 [HTTP 响应头信息](http://www.runoob.com/http/http-header-fields.html)
 
 ### 状态码,状态文字
 状态码是用来反应服务器的响应情况的,状态文字是用来描述状态码
 
- 200 服务器成功返回网页
- 301 永久重定向
- 302 临时重定向
- 304 not modified未修改  (Etag,last-modified)
- 307 重定向中保持原有的请求数据

> **301和302重定向在定向过程中会将body信息丢失,此时可以将301或302更改为307**

- 404 请求网页不存在
- 500 服务器内部错误
- 503 服务器暂时不可用
[HTTP状态码](http://www.runoob.com/http/http-status-codes.html)

### HTTP content-type
[HTTP content-type](http://www.runoob.com/http/http-content-type.html)

#### cookie 
> http是无状态链接,两次请求之间无关系,使用cookie记住状态

#### refer防盗链

#### http协议缓存控制

#### http压缩 
- Content-Encoding:gzip
> 为了提高网页在网络上的传输速度,服务器对主体信息就行压缩(gzip,compress,sdch)

[HTTP 教程](http://www.runoob.com/http/http-messages.html)

[通过 User-Agent 识别爬虫的原理、实践与对应的绕过方法](https://www.google.com.hk/search?safe=strict&hl=zh-CN&ei=_XrEXNLiAe7iz7sPkZ2a6AY&q=php爬虫原理&oq=php爬虫原理&gs_l=psy-ab.3...1480.3995..4112...0.0..0.432.779.1j2j4-1......0....1..gws-wiz.PJRa7FJNo9I)