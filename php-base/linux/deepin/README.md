#### 安装git
```
sudo apt-get install git
```
[git安装](https://git-scm.com/download/linux)

#### 安装node和npm 
- 先下载node [node下载](https://nodejs.org/zh-cn/)
- 下载完之后将node解压的desktop,然后将文件夹更改为node
- 之后添加到启动
```
sudo ln -s /home/jp/Desktop/node/bin/node /usr/local/bin/node
sudo ln -s /home/jp/Desktop/node/bin/npm /usr/local/bin/npm
```
![1](https://github.com/easterCat/easter_php/blob/master/php-base/linux/deepin/01.png?raw=true)

#### 安装anyproxy
> 用来解析http/https链接的内容,抓包工具
1. `sudo npm install anyproxy -g`
2. `anyproxy --version`

如果报'command is no found',原因就在于npm在linux上安装全局模块并不会向window上那样自动将环境变量给配置好,需要自己去手动配置.

- 此时找到/etc/profile文件,打开并且修改这个文件就好了,在文件尾部添加
```
export PATH="$PATH:/home/jp/node/bin"    //(export PATH="$PATH:/home/xxx/你的node文件夹名称/bin")
```
- 之后再次重启服务器就可以运行了
![2](https://github.com/easterCat/easter_php/blob/master/php-base/linux/deepin/02.png?raw=true)

- 启动anyproxy
`anyproxy`
![启动输出](https://github.com/easterCat/easter_php/blob/master/php-base/linux/deepin/03.png?raw=true)

- 打开anyproxy
'localhost:8002'
![浏览器输出](https://github.com/easterCat/easter_php/blob/master/php-base/linux/deepin/04.png?raw=true)

***

[npm install全局安装找不到命令](https://blog.csdn.net/m0_37263637/article/details/81942435)

#### 安装pm2 (pm2是用来管理anyproxy)
`sudo npm install pm2 -g`

使用
1. pm2 start anyproxy
![pm2启动](https://github.com/easterCat/easter_php/blob/master/php-base/linux/deepin/05.png?raw=true)
2. pm2 stop anyproxy
3. pm2 restart anyproxy

> 其它常用的有pm2 list , pm2 delete , pm2 describe等等,具体看官网

*** 
[pm2在npm的地址](https://www.npmjs.com/package/pm2)
