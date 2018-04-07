# Laravel 依赖注入原理

要讲 Laravel 的依赖注入原理首先要知道 Laravel 的依赖注入做了什么东西，然后再理解是怎么做的。

## Laravel 依赖注入做了什么
在 Laravel 中，一个请求要经过路由，中间件，然后到控制器。在控制器的方法如下：

```
<?php

namespace App\Http\Controllers;


use App\Repositories\TestRepository;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request, TestRepository $testRepository)
    {
        $requestData = $request->all();
        $testRepository->test($requestData);
    }
}
```

在调用 test 方法的时候 *$request*, *$testRepository* 两个参数的实例是怎么生成的？
按我的理解，这些参数就是通过依赖注入生成实例的。
## Laravel 依赖注入原理
大概知道了依赖注入都做了什么东西，那么是怎么做的呢？
通过查看源代码可以找到一些东西：

```
	// Illuminate\Routing\Route.php 209-214
	protected function runController()
    {
        return $this->controllerDispatcher()->dispatch(
            $this, $this->getController(), $this->getControllerMethod()
        );
    }
    
    //Illuminate\Routing\ControllerDispatcher 
    public function dispatch(Route $route, $controller, $method)
    {
        $parameters = $this->resolveClassMethodDependencies(
            $route->parametersWithoutNulls(), $controller, $method
        );

        if (method_exists($controller, 'callAction')) {
            return $controller->callAction($method, $parameters);
        }

        return $controller->{$method}(...array_values($parameters));
    }
    
    //Illuminate\Routing\RouteDependencyResolverTrait
    protected function resolveClassMethodDependencies(array $parameters, $instance, $method)
    {
        if (! method_exists($instance, $method)) {
            return $parameters;
        }

        return $this->resolveMethodDependencies(
            $parameters, new ReflectionMethod($instance, $method)
        );
    }

    public function resolveMethodDependencies(array $parameters, ReflectionFunctionAbstract $reflector)
    {
        $instanceCount = 0;

        $values = array_values($parameters);

        foreach ($reflector->getParameters() as $key => $parameter) {
        		//在这里生成参数的实例
            $instance = $this->transformDependency(
                $parameter, $parameters
            );

            if (! is_null($instance)) {
                $instanceCount++;

                $this->spliceIntoParameters($parameters, $key, $instance);
            } elseif (! isset($values[$key - $instanceCount]) &&
                      $parameter->isDefaultValueAvailable()) {
                $this->spliceIntoParameters($parameters, $key, $parameter->getDefaultValue());
            }
        }

        return $parameters;
    }
    
    protected function transformDependency(ReflectionParameter $parameter, $parameters)
    {
        $class = $parameter->getClass();

        // If the parameter has a type-hinted class, we will check to see if it is already in
        // the list of parameters. If it is we will just skip it as it is probably a model
        // binding and we do not want to mess with those; otherwise, we resolve it here.
        if ($class && ! $this->alreadyInParameters($class->name, $parameters)) {
            return $parameter->isDefaultValueAvailable()
                ? $parameter->getDefaultValue()
                : $this->container->make($class->name);
        }
    }

```

通过以上代码可以看出参数实例的生成是通过 PHP 反射机制来生成的。在 transformDependency() 方法中，通过 ReflectionParameter 的 getDefaultValue() 来根据参数类型生成一个实例。



