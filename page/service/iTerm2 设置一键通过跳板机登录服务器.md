# iTerm2 设置一键通过跳板机登录服务器


在 /.ssh 文件夹下创建文件内容如下

```
#!/usr/bin/expect -f
set host ***.***.***.**
set TERMSERV **.**.**.***
set USER ***
set UATUN ***

# 登录跳板机
spawn ssh -A $USER@$TERMSERV -p ***
# 登录内网
expect "*username*" {send "ssh $UATUN@$host\r"}
interact
```

