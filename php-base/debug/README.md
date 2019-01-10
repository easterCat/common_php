#### 主体 php + phpstudy + phpstrom + xdubug + postman + vue + chrome

使用的是前后端分离的开发方式，vue 在 webpack 通过代理进行请求转接，之前在使用 node 开发的时候进行断点调试能够根据请求的接口到达断点地方，按步查询代码的执行。然而在 php 对接口的调试就不是那么舒服了，目前的框架内部只实现了错误日志打印，不好更准确的定位问题的所在，于是就开始了前后端分离情况下 php 调试代码探寻。

#### chrome

安装 xdebug helper
![19](https://github.com/easterCat/easter_php/blob/master/php-base/debug/19.png?raw=true)
然后在选项中奖IDE key设置为phpstorm

#### phpstudy

1. 先在 phpstudy 中: 配置文件->php 扩展与设置中->php 扩展->Xdebug 打开
   ![01](https://github.com/easterCat/easter_php/blob/master/php-base/debug/01.png?raw=true)

2. 打开 php.ini

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

3. 重启服务器，查看 phpinfo()中是否有 xdebug

####phpstorm

1. 在 setting->Languages and Frameworks->PHP
   ![02](https://github.com/easterCat/easter_php/blob/master/php-base/debug/02.png?raw=true)
   这是已经添加好的，没有配置过需要讲 php.exe 路径添加一下
   ![03](https://github.com/easterCat/easter_php/blob/master/php-base/debug/03.png?raw=true)

2. PHP->debug
   ![04](https://github.com/easterCat/easter_php/blob/master/php-base/debug/04.png?raw=true)

    > 这里 debug port 设置为 php.ini 里面设置的那个端口

3. PHP->debug->DBGp proxy
   ![05](https://github.com/easterCat/easter_php/blob/master/php-base/debug/05.png?raw=true)

4. PHP->Servers
   ![06](https://github.com/easterCat/easter_php/blob/master/php-base/debug/06.png?raw=true)

5. 头部导航->Run->Edit Configurations
   按照预设模板
   ![07](https://github.com/easterCat/easter_php/blob/master/php-base/debug/07.png?raw=true)

6. 在目录下的 index.php 打个断点

7. 点击甲虫开启调试，点击电话开启监听
   ![08](https://github.com/easterCat/easter_php/blob/master/php-base/debug/08.png?raw=true)
   这时候你的默认浏览器会自动打开一个 tab
   ![10](https://github.com/easterCat/easter_php/blob/master/php-base/debug/10.png?raw=true)
   然后打开 phpstorm 可以看到断点已经生效了
   ![09](https://github.com/easterCat/easter_php/blob/master/php-base/debug/09.png?raw=true)

#### postman

1. 断点
   在 model 下的 mine_date 中打一个断点
   ![14](https://github.com/easterCat/easter_php/blob/master/php-base/debug/14.png?raw=true)

2. 请求地址
   ![11](https://github.com/easterCat/easter_php/blob/master/php-base/debug/11.png?raw=true)
   可以看到能够访问，能够获取数据，但是并没有走 debug,断点不生效

3. 在开启调试的时候，会在默认浏览器打开一个 tab，这个网址http://api.h5.com:5555/?XDEBUG_SESSION_START=12087，可以进入调试，那将?XDEBUG_SESSION_START=12087放到postman请求的网址后面就好了

   ![12](https://github.com/easterCat/easter_php/blob/master/php-base/debug/12.png?raw=true)
   进入 loading 了，非常好

![15](https://github.com/easterCat/easter_php/blob/master/php-base/debug/15.png?raw=true)

![13](https://github.com/easterCat/easter_php/blob/master/php-base/debug/13.png?raw=true)
可以看到，进入到 model 里面的 mine_date 这个方法里面了，断点生效了

#### web

1. 跟 postman 差不多，进行 http 请求的时候将?XDEBUG_SESSION_START=12087 添加到 url 后面就好了
   ![16](https://github.com/easterCat/easter_php/blob/master/php-base/debug/16.png?raw=true)

然后 ajax 请求接口
![17](https://github.com/easterCat/easter_php/blob/master/php-base/debug/17.png?raw=true)

php 进入调试
![18](https://github.com/easterCat/easter_php/blob/master/php-base/debug/18.png?raw=true)
