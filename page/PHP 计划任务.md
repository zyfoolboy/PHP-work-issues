# PHP 计划任务
## Crontab 命令
在 Linux 服务器中，可以使用 Crontab 来执行计划任务。
## 执行 PHP 脚本
#### 1.直接运行 PHP 脚本
在 Crontab 文件中写
```
00 * * * * /usr/local/bin/php /home/john/myscript.php
```
#### 2.使用 URL 访问执行 PHP
如果 PHP 脚本可以通过 URL 触发可以在 Crontab 文件中使用 lynx curl wget 方式访问链接地址
### 参考
* [PHP计划任务:如何使用Linux的Crontab执行PHP脚本](https://www.centos.bz/2011/07/php-cron-job-linux-crontab/)

