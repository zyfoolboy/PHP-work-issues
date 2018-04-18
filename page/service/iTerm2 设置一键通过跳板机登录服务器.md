# iTerm2 设置一键通过跳板机登录服务器


在 

```
#!/usr/bin/expect -f
set host 192.168.132.29
set TERMSERV 42.62.69.161
set USER zy26
set UATUN zy26

# 登录跳板机
spawn ssh -A $USER@$TERMSERV -p 34185
# 登录内网
expect "*zy26*" {send "ssh $UATUN@$host\r"}
interact
```

