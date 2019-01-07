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


- [Deepin 15 搭建LNMP环境](https://www.jianshu.com/p/683be04713ad)
- [linux 下vim的使用](https://blog.csdn.net/yangshuainan/article/details/78219604)
