## MAMP 修改 php.ini 文件
位置 File -> Edit Template -> PHP(php.ini)
选择 PHP 版本
在 xdebug 项加入

```
 xdebug.remote_enable=1
 xdebug.remote_host=localhost
 xdebug.remote_port=9000
 xdebug.remote_autostart=1
 xdebug.idekey="PHPSTORM"
```

## PHPStrom 配置
### 配置 Servers
位置 PhpStorm -> Preferences -> Languges & Frameworks -> PHP -> Servers
![20AC7C36-4A93-4983-A9ED-B520839D8075](media/20AC7C36-4A93-4983-A9ED-B520839D8075.png)



