# 如何排查 MySQL 慢查询

### 开启 MySQL 慢查询
通过修改配置文件开启慢查询(还可以用 MySQL 命令行开启)
在 my.ini 中增加配置：

```
[mysqlld]  
long_query_time=2  
  
#5.0、5.1等版本配置如下选项  
log-slow-queries="mysql_slow_query.log"  
#5.5及以上版本配置如下选项  
slow-query-log=On  
slow_query_log_file="mysql_slow_query.log"  
  
log-query-not-using-indexes  
```
### 验证慢查询是否开启
通过执行 sql 查看是否开启慢查询

```
/*查看慢查询时间 */  
show variables like "long_query_time";默认10s  
  
/*查看慢查询配置情况 */  
show status like "%slow_queries%";  
  
/*查看慢查询日志路径 */  
 show variables like "%slow%";  
```
### 分析慢查询
找到慢查询语句后通过 explain 或者 desc 命令查看慢查询语句。
产生慢查询的原因有很多，有可能是数据量太大没有建索引，有可能是表被锁了，处于等待状态，等等。然后根据具体原因找具体的解决办法。

参考：
[explain 的用法](https://segmentfault.com/a/1190000008131735)



