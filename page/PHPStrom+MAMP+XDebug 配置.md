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
MAMP 中 xdebug 选项要打开
![B5FC807E-7A82-4A9D-9136-4B5FEFFF0655](media/B5FC807E-7A82-4A9D-9136-4B5FEFFF0655.png)

## PHPStrom 配置
### 配置 Servers
位置 PhpStorm -> Preferences -> Languges & Frameworks -> PHP -> Servers
![20AC7C36-4A93-4983-A9ED-B520839D8075](media/20AC7C36-4A93-4983-A9ED-B520839D8075.png)
### 配置 Edit Configurations
![屏幕快照 2017-08-06 上午11.59.37](media/%E5%B1%8F%E5%B9%95%E5%BF%AB%E7%85%A7%202017-08-06%20%E4%B8%8A%E5%8D%8811.59.37.png)
![6265C469-664B-486A-9CB1-FA2D33D01593](media/6265C469-664B-486A-9CB1-FA2D33D01593.png)
选择 1 中添加的 Servers
![屏幕快照 2017-08-06 下午2.12.19](media/%E5%B1%8F%E5%B9%95%E5%BF%AB%E7%85%A7%202017-08-06%20%E4%B8%8B%E5%8D%882.12.19.png)
## 浏览器配置
安装 [Xdebug](https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc) 插件。
安装完成之后在 Chrome 插件的地方右击选择 **选项** 
![C2543A74-E227-4F3B-ACDB-A84C8B719145](media/C2543A74-E227-4F3B-ACDB-A84C8B719145.png)

## 开始调试
![F7660601-A38D-4E84-B7CA-36888AED4936](media/F7660601-A38D-4E84-B7CA-36888AED4936.png)
这几个地方点击选择完成就可以打断点调试了。


