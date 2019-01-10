#### 主体php + phpstudy + phpstrom + xdubug + postman + vue
使用的是前后端分离的开发方式，vue在webpack通过代理进行请求转接，之前在使用node开发的时候进行断点调试能够根据请求的接口到达断点地方，按步查询代码的执行。然而在php对接口的调试就不是那么舒服了，目前的框架内部只实现了错误日志打印，不好更准确的定位问题的所在，于是就开始了前后端分离情况下php调试代码探寻。

#### phpstudy
1. 先在phpstudy中: 配置文件->php扩展与设置中->php扩展->Xdebug打开
![01](https://github.com/easterCat/easter_php/blob/master/php-base/debug/01.png?raw=true)

2. 打开php.ini
```
[XDebug]
xdebug.profiler_output_dir="D:\phpStudy\PHPTutorial\tmp\xdebug"
xdebug.trace_output_dir="D:\phpStudy\PHPTutorial\tmp\xdebug"
xdebug.remote_log="D:\phpStudy\PHPTutorial\tmp\xdebug.log"
zend_extension="D:\phpStudy\PHPTutorial\php\php-7.0.12-nts\ext\php_xdebug.dll"
xdebug.remote_enable =1
xdebug.remote_handler = "dbgp"
xdebug.idekey = PHPSTORM
xdebug.remote_host = "127.0.0.1"
xdebug.remote_port = 9000
```
该开启的开启，该添加的添加，注意路径正确，根据个人路径更改

3. 重启服务器，查看phpinfo()中是否有xdebug

####phpstorm

1. 在setting->Languages and Frameworks->PHP
![02](https://github.com/easterCat/easter_php/blob/master/php-base/debug/02.png?raw=true)
这是已经添加好的，没有配置过需要讲php.exe路径添加一下
![03](https://github.com/easterCat/easter_php/blob/master/php-base/debug/03.png?raw=true)

2. PHP->debug
![04](https://github.com/easterCat/easter_php/blob/master/php-base/debug/04.png?raw=true) 
这里debug port设置为php.ini里面设置的那个端口

3. PHP->debug->DBGp proxy
![05](https://github.com/easterCat/easter_php/blob/master/php-base/debug/05.png?raw=true)

4. PHP->Servers
![06](https://github.com/easterCat/easter_php/blob/master/php-base/debug/06.png?raw=true)

5. 头部导航->Run->Edit Configurations
按照预设模板
![07](https://github.com/easterCat/easter_php/blob/master/php-base/debug/07.png?raw=true)

6. 在目录下的index.php打个断点

7. 点击甲虫开启调试，点击电话开启监听
![08](https://github.com/easterCat/easter_php/blob/master/php-base/debug/08.png?raw=true)
这时候你的默认浏览器会自动打开一个tab
![10](https://github.com/easterCat/easter_php/blob/master/php-base/debug/10.png?raw=true)
然后打开phpstorm可以看到断点已经生效了
![09](https://github.com/easterCat/easter_php/blob/master/php-base/debug/09.png?raw=true)

#### postman
1. 断点
在model下的mine_date中打一个断点
![14](https://github.com/easterCat/easter_php/blob/master/php-base/debug/14.png?raw=true)

2. 请求地址
![11](https://github.com/easterCat/easter_php/blob/master/php-base/debug/11.png?raw=true)
可以看到能够访问，能够获取数据，但是并没有走debug,断点不生效

3. 在开启调试的时候，会在默认浏览器打开一个tab，这个网址http://api.h5.com:5555/?XDEBUG_SESSION_START=12087，可以进入调试，那将?XDEBUG_SESSION_START=12087放到postman请求的网址后面就好了
![12](https://github.com/easterCat/easter_php/blob/master/php-base/debug/12.png?raw=true)
进入loading了，非常好

![15](https://github.com/easterCat/easter_php/blob/master/php-base/debug/15.png?raw=true)
![13](https://github.com/easterCat/easter_php/blob/master/php-base/debug/13.png?raw=true)
可以看到，进入到model里面的mine_date这个方法里面了，断点生效了

#### web
1. 跟postman差不多，进行http请求的时候将?XDEBUG_SESSION_START=12087添加到url后面就好了
![16](https://github.com/easterCat/easter_php/blob/master/php-base/debug/16.png?raw=true)

然后ajax请求接口
![17](https://github.com/easterCat/easter_php/blob/master/php-base/debug/17.png?raw=true)

php进入调试
![18](https://github.com/easterCat/easter_php/blob/master/php-base/debug/18.png?raw=true)