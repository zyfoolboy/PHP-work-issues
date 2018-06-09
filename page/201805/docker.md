# Docker
## 镜像

列出本机的所有 image 文件。

    docker image ls
    docker images

删除 image 文件

    docker image rm [imageName]
    docker rmi [imageName]/[imageId]

pull 拉取镜像

    docker pull centos

启动镜像

```
docker run -it -P --name 'centos-test' --rm centos /bin/bash
# --name 指定容器别名
# -P 通过NAT机制将容器标记暴露的端口自动映射到本地主机的临时端口
# -i 保持标准输入打开 默认为false
# -t 是否分配一个伪终端
# 启动一个bash终端，允许用户进行交互
# --rm 退出后删除容器
```

## 容器

启动一个镜像就会生成一个容器，查看正在运行的容器：

    docker ps
    
查看所有容器

    docker ps -a 
    
启动容器

    docker start $container-name
    
关闭容器

    docker stop $container-name
    
如果容器是 Linux 系统的话进入系统命令：

    docekr exec -it [container-name] bash

查看容器详情

    docker inspect [container-name]
    
删除容器

    docker rm [container-name-1] [container-name-2] ...

