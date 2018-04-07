# Laravel 中一个 HTTP 请求的执行过程

本次所使用的框架为 Laravel 5.6 

## 基本流程
* 引入 vendor/autoload.php 自动加载依赖库；
* 引入 bootstrap/app.php 并创建 $app ；
* 通过 `$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);` 获得 HTTP 内核 Kernel 的实例；
* 通过 `$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);` 处理一个 HTTP 请求，并得到请求结果；
* 返回请求结果给客户端；
* 请求结束，清理相关数据。

## 详细流程
### 引入 vendor/autoload.php 自动加载依赖库
### 引入 bootstrap/app.php 并创建 $app 
### 获得 HTTP 内核 Kernel 的实例
### 处理 HTTP 请求，并得到请求结果
### 返回请求结果给客户端
### 请求结束，清理相关数据

