- LAMP==Linux+Apache+Mysql+PHP
- LNMP==Linux+Nginx+Mysql+PHP

#### 安装nginx
`sudo apt install nginx`
![nginx](https://github.com/easterCat/easter_php/blob/master/php-base/linux/nginx/01.png?raw=true)

#### 安装mysql
`sudo apt install mysql-server`
![mysql](https://github.com/easterCat/easter_php/blob/master/php-base/linux/nginx/02.png?raw=true)

#### 安装php
`sudo apt install php7.1-fpm php7.1-mysql php7.1-curl`
[php]()

#### 开始配置
- 备份默认配置文件
`sudo cp /etc/nginx/sites-available/default /etc/nginx/sites-available/default.bak`
- 修改默认配置文件,添加php支持
`sudo vim /etc/nginx/sites-available/default`
- 修改为以下内容并保存
```
server {
    listen 80 default_server;

    root /var/www/html;

    index index.html index.htm index.nginx-debian.html index.php;

    server_name _;

    location / {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;

        fastcgi_pass unix:/run/php/php7.1-fpm.sock;
    }
}
```
- 重启Nginx或重新加载配置文件
`sudo systemctl restart nginx.service`
`sudo nginx -s reload`

- 写入
`<?php phpinfo(); ?>`

保存配置访问 http://localhost/phpinfo.php ,如果出现下图内容,就ok
![03](https://github.com/easterCat/easter_php/blob/master/php-base/linux/nginx/03.png?raw=true)
![04](https://github.com/easterCat/easter_php/blob/master/php-base/linux/nginx/04.png?raw=true)

#### 新建站点
- 创建站点根目录
`sudo mkdir /var/www/base.com`
- 配置站点文件
```
sudo cp /etc/nginx/sites-available/default  /etc/nginx/sites-available/admin.com
sudo vim /etc/nginx/sites-available/admin.com

//配置文件如下
server {
    listen 80;

    server_name example.com;

    root /var/www/admin.com;
    index index.html index.php;

    location / {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
    
        fastcgi_pass unix:/var/run/php7.1-fpm.sock;
    }
}
```
- 保存文件后，创建一个软链接到sites-enabled
`sudo ln -s /etc/nginx/sites-available/admin.com /etc/nginx/sites-enabled/admin.com`

- 重新加载ngnix配置文件，即完成网站添加
`sudo systemctl reload nginx.service`

- 进入目录
`sudo cd /var/www/base.com`

- 新建index.php
`sudo vi index.php`

#### 其他机器访问

访问base.com,此时是没有找到的

- 修改/etc/hosts
```
127.0.0.1  base.com
```

![05](https://github.com/easterCat/easter_php/blob/master/php-base/linux/nginx/05.png?raw=true)

- 查找本机ip
`sudo ip address`

- 然后将base.com在其他机器上映射到获取的ip
```
//在C:\Windows\System32\drivers\etc\hosts添加
192.xxx.xxx.xxx  base.com
```

- 然后在浏览器输入base.com就ok了


***

- [Deepin 15 搭建LNMP环境](https://www.jianshu.com/p/683be04713ad)
- [linux 下vim的使用](https://blog.csdn.net/yangshuainan/article/details/78219604)
- [网络管理](https://wiki.deepin.org/wiki/网络管理)
