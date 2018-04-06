## web 服务器是怎么和 PHP 关联的
web 服务器通过 CGI 和应用程序关联。
CGI（Common Getaway Interface） 通用网管接口。是一个标准接口集，Web 服务器可以通过它来装载程序以响应对特定 URL 的 HTTP 请求，并收集程序的输出数据，将其放在 HTTP 响应中回送。（HTTP 权威指南 page 214-215）
每条 CGI 请求都会引发一个新的进程，这样开销是很高的。
FastCGI 是一种新型 CGI ，这个接口模拟了 CGI，它是作为持久守护进程运行的，消除了为每个请求建立或注销新进程所带来的性能损耗。

PHP-FPM 是实现了 FastCGI 标准的应用程序，web 服务器的请求会通过 PHP-FPM 和 PHP 联系到一起。 


