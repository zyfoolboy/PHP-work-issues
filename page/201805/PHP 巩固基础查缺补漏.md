## 学习计划

目前 PHP 基础比较薄弱，需要加强巩固 PHP 基础，每天晚上抽大概一个小时的时间用来持续学习。
重点：一周内，要全面系统里掌握语法.看代码先消化现在的框架，再看开源的。

近期计划：

1.PHP 基本语法巩固

	用 1 - 2 个小时看 PHP 官方手册基本语法相关内容。
	
2.PHP 数组相关函数学习

	用 2 - 4 个小时巩固 PHP 数组相关函数运用，PHP 手册的数组相关函数使用的例子自己动手写一遍。
	
3.面向对象知识学习

	用 1 - 2 个小时看 PHP 手册类与对象章节，相关案例自己动手实践一遍，空余时间多的话要找一些相关书籍，文章看一下。

4.mtphp 框架源码阅读

	框架源码用 1 周左右的业余时间过一遍，了解框架的基本原理，做到可以熟练排查并解决项目中出现的问题。
	
5.学习其他同事的项目代码

	多看一些其他同事的项目代码，学习团队的代码规范，编码风格，做到可以独立负责项目的一个模块。
	
6.熟悉 Linux 操作

	平时多实践常用的 Linux 命令，要做到可以在服务器上熟练的调试项目，快速解决 bug。
	

## 记录
### 20180511 22:10 - 23:10

语言参考 
	
**基本语法**

	PHP 标记
	从 HTML 中分离
	指令分隔符
	注释


**类型**
	
	PHP 支持 9 种原始数据类型
	
	gettype() 函数获得变量类型
	is_tpye 函数检验类型 edg：is_int(),is_string()
	settpye() 强制类型转换
	
	如果给定的一个数超出了 integer 的范围，将会被解释为 float。同样如果执行的运算结果超出	了 integer 范围，也会返回 float。
	
	浮点数的精度有限，不要比较两个浮点数是否相等。如果确实需要更高的精度，应该使用任意精度数学函数或者 gmp 函数。
	
	字符串在单引号字符串中的变量和特殊字符的转义序列将不会被替换。
	
	数组中 key 可以是 integer 或者 string。	◦	包含有合法整型值的字符串会被转换为整型。
	◦	浮点数，布尔值也会被转换为整型。
	◦	Null 会被转换为空字符串，即键名 null 实际会被储存为 ""。
	◦	数组和对象不能被用为键名。坚持这么做会导致警告：Illegal offset type。

### 20180513 21:50 - 23:10

	PHP是将函数以string形式传递的。
	一个已实例化的 object 的方法被作为 array 传递，下标 0 包含该 object，下标 1 包含方法名。
	静态类方法也可不经实例化该类的对象而传递，只要在下标 0 中包含类名而不是对象。

**变量**

	$this 是一个特殊的变量，它不能被赋值。
	静态变量如果在声明中用表达式的结果对其赋值会导致解析错误。
	静态声明是在编译时解析的。
	要将可变变量用于数组，必须解决一个模棱两可的问题。这就是当写下 $$a[1] 时，解析器需要知道是想要 $a[1]作为一个变量呢，还是想要 $$a 作为一个变量并取出该变量中索引为 [1] 的值。解决此问题的语法是，对第一种情况用 ${$a[1]}，对第二种情况用 ${$a}[1]。

[test1.php](https://github.com/zyfoolboy/PHP-work-issues/blob/master/page/201805/test1.php)

### 20180514 22:10 - 23:30

**表达式**

	在 PHP 中，几乎所写的任何东西都是一个表达式。简单但却最精确的定义一个表达式的方式就是“任何有值的东西”。
	函数也是表达式，表达式的值即为它们的返回值。
**运算符**
	
	PHP 支持引用赋值，使用“$var = &$othervar;”语法。引用赋值意味着两个变量指向了同一个数据，没有拷贝任何东西。
	$a <=> $b 太空船运算符（组合比较符）当$a小于、等于、大于$b时 分别返回一个小于、等于、大于0的integer 值。 PHP7开始提供.
	$a ?? $b ?? $c NULL 合并操作符 从左往右第一个存在且不为 NULL 的操作数。如果都没有定义且不为 NULL，则返回 NULL。PHP7开始提供。（和 ?: 有一点不一样 $a ?? $b 是判断 $a 是否有值， $a ?: $b 是判断 $a 是否为真）
	由于浮点数 float 的内部表达方式，不应比较两个浮点数float是否相等。
	PHP 支持一个错误控制运算符：@。
	PHP 支持一个执行运算符：反引号（``）。注意这不是单引号！PHP 将尝试将反引号中的内容作为 shell 命令来执行，并将其输出信息返回（即，可以赋给一个变量而不是简单地丢弃到标准输出）。使用反引号运算符“`”的效果与函数shell_exec() 相同。
	数组 + 运算符把右边的数组元素附加到左边的数组后面，两个数组中都有的键名，则只用左边数组中的，右边的被忽略。
	检查一个对象是否不是某个类的实例，可以使用逻辑运算符 not。
	instanceof也可用于确定一个变量是不是实现了某个接口的对象的实例:
	虽然 instanceof 通常直接与类名一起使用，但也可以使用对象或字符串变量

[operator.php](https://github.com/zyfoolboy/PHP-work-issues/blob/master/page/201805/operator.php) [list_function.php](https://github.com/zyfoolboy/PHP-work-issues/blob/master/page/201805/list_function.php)

### 20180515 20:10 - 23:10

**流程控制**

	一般用法是 declare(ticks=N);Zend引擎每执行1条低级语句就去执行一次 register_tick_function() 注册的函数。可以粗略的理解为每执行一句php代码（例如:$num=1;）就去执行下已经注册的tick函数。
	require 在出错时产生 E_COMPILE_ERROR 级别的错误。换句话说将导致脚本中止而 include 只产生警告（E_WARNING），脚本会继续运行。
	当一个文件被包含时，语法解析器在目标文件的开头脱离 PHP 模式并进入 HTML 模式，到文件结尾处恢复。由于此原因，目标文件中需要作为 PHP 代码执行的任何代码都必须被包括在有效的 PHP 起始和结束标记之中。
	
**函数**

	匿名函数目前是通过 Closure 类来实现的。

[declare.php](https://github.com/zyfoolboy/PHP-work-issues/blob/master/page/201805/declare.php)

[include](https://github.com/zyfoolboy/PHP-work-issues/blob/master/page/201805/include)

### 20180516 21:40 - 22:40

**类与对象**

	可以把在类中始终保持不变的值定义为常量。在定义和使用常量的时候不需要使用 $ 符号。
	常量的值必须是一个定值，不能是变量，类属性，数学运算的结果或函数调用。
	接口（interface）中也可以定义常量。

	PHP 允行开发者在一个类中定义一个方法作为构造函数。具有构造函数的类会在每次创建新对象时先调用此方法，所以非常适合在使用对象之前做一些初始化工作。如果子类中定义了构造函数则不会隐式调用其父类的构造函数。要执行父类的构造函数，需要在子类的构造函数中调用 parent::__construct()。如果子类没有定义构造函数则会如同一个普通的类方法一样从父类继承（假如没有被定义为 private 的话）。

	析构函数会在到某个对象的所有引用都被删除或者当对象被显式销毁时执行。和构造函数一样，父类的析构函数不会被引擎暗中调用。要执行父类的析构函数，必须在子类的析构函数体中显式调用 parent::__destruct()。此外也和构造函数一样，子类如果自己没有定义析构函数则会继承父类的。析构函数即使在使用 exit() 终止脚本运行时也会被调用。
	
	对属性或方法的访问控制，是通过在前面添加关键字 public（公有），protected（受保护）或 private（私有）来实现的。被定义为公有的类成员可以在任何地方被访问。被定义为受保护的类成员则可以被其自身以及其子类和父类访问。被定义为私有的类成员则只能被其定义所在的类访问。如果用 var 定义，则被视为公有。
	同一个类的对象即使不是同一个实例也可以互相访问对方的私有与受保护成员。这是由于在这些对象的内部具体实现的细节都是已知的。

	声明类属性或方法为静态，就可以不实例化类而直接访问。静态属性不能通过一个类已实例化的对象来访问（但静态方法可以）。由于静态方法不需要通过对象即可调用，所以伪变量 $this 在静态方法中不可用。静态属性不可以由对象通过 -> 操作符来访问。静态属性只能被初始化为文字或常量，不能使用表达式。所以可以把静态属性初始化为整数或数组，但不能初始化为另一个变量或函数返回值，也不能指向一个对象。

	定义为抽象的类不能被实例化。任何一个类，如果它里面至少有一个方法是被声明为抽象的，那么这个类就必须被声明为抽象的。被定义为抽象的方法只是声明了其调用方式（参数），不能定义其具体的功能实现。继承一个抽象类的时候，子类必须定义父类中的所有抽象方法；

### 20180517 22:20 - 23:20

**接口**

使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。接口中定义的所有方法都必须是公有，这是接口的特性。

要实现一个接口，使用 implements 操作符。类中必须实现接口中定义的所有方法，否则会报一个致命错误。类可以实现多个接口，用逗号来分隔多个接口的名称。
实现多个接口时，接口中的方法不能有重名。接口也可以继承，通过使用 extends 操作符。

**Trait**

Trait 是为 PHP 的单继承语言特性准备的代码复用机制。Trait 不能实例化。它为传统继承增加了水平特性的组合；也就是说， Class 之间不需要有继承关系。

**Final**

如果父类中的方法被声明为 final，则子类无法覆盖该方法。如果一个类被声明为 final，则不能被继承。


当使用比较运算符（==）比较两个对象变量时，比较的原则是：如果两个对象的属性和属性值 都相等，而且两个对象是同一个类的实例，那么这两个对象变量相等。

而如果使用全等运算符（===），这两个对象变量一定要指向某个类的同一个实例（即同一个对象）。

**命名空间**

命名空间通过关键字namespace 来声明。如果一个文件中包含命名空间，它必须在其它所有代码之前声明命名空间，除了一个以外：declare关键字。另外，所有非 PHP 代码包括空白符都不能出现在命名空间的声明之前。PHP 允许将同一个命名空间的内容分割存放在不同的文件中。

### 20180518 22:10 - 23:10

PHP 可以在同一个文件中定义多个命名空间。语法格式有两种：

```
<?php
namespace MyProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }

namespace AnotherProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }
?>
```

大括号语法：

```
<?php
namespace MyProject {

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }
}

namespace AnotherProject {

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }
}
?>
```

PHP支持两种抽象的访问当前命名空间内部元素的方法，__NAMESPACE__ 魔术常量和namespace关键字。常量__NAMESPACE__的值是包含当前命名空间名称的字符串。

```
<?php
namespace MyProject;

echo '"', __NAMESPACE__, '"'; // 输出 "MyProject"
?>
```

关键字 namespace 可用来显式访问当前命名空间或子命名空间中的元素。它等价于类中的 self 操作符。

```
<?php
namespace MyProject;

function test() {
    echo '123';
}

const CONSTANT = 222;

namespace\test(); //输出 123

$b = namespace\CONSTANT;

echo $b;//输出 222
?>
```

### 20180519  22:30 - 23:30

**PHP 7 错误处理**

PHP 7 的错误异常可以被第一个匹配的 try / catch 块所捕获。如果没有匹配的 catch 块，则调用异常处理函数（事先通过 set_exception_handler() 注册）进行处理。 如果尚未注册异常处理函数，则按照传统方式处理：被报告为一个致命错误（Fatal Error）。

Error 类并非继承自 Exception 类，所以不能用 `catch (Exception $e) { ... } `来捕获 Error。你可以用 `catch (Error $e) { ... }`，或者通过注册异常处理函数（ set_exception_handler()）来捕获 Error。

对 20180513 补充

原：
     PHP是将函数以string形式传递的。
	   一个已实例化的 object 的方法被作为 array 传递，下标 0 包含该 object，下标 1 包含方法名。
	   静态类方法也可不经实例化该类的对象而传递，只要在下标 0 中包含类名而不是对象。
	   
	   
普通的函数调用，函数名是以string传递的 `'test'()` 可以访问test() 方法;
对于实例化的 object 以数组传递，数组第一个是一个已经实例化的对象，第二个是方法命，`[$this, 'foo']()` 也可以访问;


```
<?php
class Test {
	public function foo() {
		echo "function name is foo \n";
	}	
	
	public static function tt() {
		echo "function name is tt \n";
	}
}

function ww() {
	echo "function name is ww \n";
}

$test = new Test;

[$test, 'foo']();
['Test', 'tt']();
'ww'();
?>
```

### 20180520 22:00 - 23:00

**生成器**

生成器的核心是yield关键字。它最简单的调用形式看起来像一个return申明，不同之处在于普通return会返回值并终止函数的执行，而yield会返回一个值给循环调用此生成器的代码并且只是暂停执行生成器函数。

参考：
[在PHP中使用协程实现多任务调度](http://www.laruence.com/2015/05/28/3038.html)
[PHP yield 分析](https://www.cnblogs.com/lynxcat/p/7954456.html)


### 20180521 22:20 - 23:10

**数组函数**

array_change_key_case() 将 array 数组中的所有键名改为全小写或大写。

    array array_change_key_case ( array $array [, int $case = CASE_LOWER ] )
    
case 可以传两种常量，CASE_UPPER(转换为大写) 或 CASE_LOWER（转换为小写）。


array_chunk 将一个数组分割成多个数组，其中每个数组的单元数目由 size 决定。最后一个数组的单元数目可能会少于 size 个。

    array array_chunk ( array $array , int $size [, bool $preserve_keys = false ] )
    
    
array
需要操作的数组

size
每个数组的单元数目

preserve_keys
设为 TRUE，可以使 PHP 保留输入数组中原来的键名。如果你指定了 FALSE，那每个结果数组将用从零开始的新数字索引。默认值是 FALSE。

    array array_column ( array $input , mixed $column_key [, mixed $index_key = null ] )

array_column() 返回input数组中键值为column_key的列， 如果指定了可选参数index_key，那么input数组中的这一列的值将作为返回数组中对应值的键。

input
需要取出数组列的多维数组。 如果提供的是包含一组对象的数组，只有 public 属性会被直接取出。 为了也能取出 private 和 protected 属性，类必须实现 __get() 和 __isset() 魔术方法。

column_key
需要返回值的列，它可以是索引数组的列索引，或者是关联数组的列的键，也可以是属性名。 也可以是NULL，此时将返回整个数组（配合index_key参数来重置数组键的时候，非常管用）

index_key
作为返回数组的索引/键的列，它可以是该列的整数索引，或者字符串键值。

    array array_combine ( array $keys , array $values )
    
array_combine 返回一个 array，用来自 keys 数组的值作为键名，来自 values 数组的值作为相应的值。如果两个数组的单元数不同则返回 FALSE。

    array array_count_values ( array $array )
    
array_count_values() 返回一个数组： 数组的键是 array 里单元的值； 数组的值是 array 单元的值出现的次数。对数组里面的每个不是 string 和 integer 类型的元素抛出一个警告错误。

### 20180522 22:30 - 23:10

    array array_diff_assoc ( array $array1 , array $array2 [, array $... ] )

array_diff_assoc() 返回一个数组，该数组包括了所有在 array1 中但是不在任何其它参数数组中的值。

    array array_diff_key ( array $array1 , array $array2 [, array $... ] )

根据 array1 中的键名和 array2 进行比较，返回不同键名的项。

    array array_diff_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )
    
对比了 array1 和 array2 并返回不同之处。和 array_diff_assoc() 不同的是使用了用户自定义的回调函数，而不是内置的函数。

    array array_diff_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )

array_diff_ukey() 返回一个数组，该数组包括了所有出现在 array1 中但是未出现在任何其它参数数组中的键名的值。此比较是通过用户提供的回调函数来进行的。如果认为第一个参数小于，等于，或大于第二个参数时必须分别返回一个小于零，等于零，或大于零的整数。

    array array_diff ( array $array1 , array $array2 [, array $... ] )

对比 array1 和其他一个或者多个数字，返回在 array1 中但是不在其他 array 里的值。只比较值。


| 函数 | 比较的东西 | 返回 |
| --- | --- | --- |
| array_diff_assoc() | 比较键名和值 | 返回键名和值不一样的 `$key => $value` |
| array_diff_key() | 比较键名 | 返回键名不一样的 `$key => $value` |
| array_diff_uassoc() | 比较键名和值,用户可以自定义返回规则 key_compare_func 返回 0 代表相同 | 根据 key_compare_func 的规则返回 |
| array_diff_ukey() | 比较键名,用户可以自定义返回规则 key_compare_func 返回 0 代表相同 | 根据 key_compare_func 的规则返回 |
| array_diff() | 比较值 | 返回值不一样的 `$key => $value` |


    array array_fill_keys ( array $keys , mixed $value )
    
使用 value 参数的值作为值，使用 keys 数组的值作为键来填充一个数组。

    array array_fill ( int $start_index , int $num , mixed $value )
    
array_fill() 用 value 参数的值将一个数组填充 num 个条目，键名由 start_index 参数指定的开始。

### 20180523 22:50 - 23:30

    array array_filter ( array $array [, callable $callback [, int $flag = 0 ]] )

依次将 array 数组中的每个值传递到 callback 函数。如果 callback 函数返回 true，则 array 数组的当前值会被包含在返回的结果数组中。数组的键名保留不变。

    array array_flip ( array $array )

array_flip() 返回一个反转后的 array，例如 array 中的键名变成了值，而 array 中的值成了键名。注意 array 中的值需要能够作为合法的键名（例如需要是 integer 或者 string）。如果类型不对，将出现一个警告，并且有问题的键／值对将不会出现在结果里。如果同一个值出现多次，则最后一个键名将作为它的值，其它键会被丢弃。

    array array_intersect_assoc ( array $array1 , array $array2 [, array $... ] )

array_intersect_assoc() 返回一个数组，该数组包含了所有在 array1 中也同时出现在所有其它参数数组中的值。

    array array_intersect_key ( array $array1 , array $array2 [, array $... ] )

array_intersect_key() 返回一个数组，该数组包含了所有出现在 array1 中并同时出现在所有其它参数数组中的键名的值。

    array array_intersect_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )
    
array_intersect_uassoc() 返回一个数组，该数组包含了所有在 array1 中也同时出现在所有其它参数数组中的值。注意和 array_intersect() 不同的是键名也用于比较。

    array array_intersect_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )

array_intersect_ukey() 返回一个数组，该数组包含了所有出现在 array1 中并同时出现在所有其它参数数组中的键名的值。

    array array_intersect ( array $array1 , array $array2 [, array $... ] )
    
array_intersect() 返回一个数组，该数组包含了所有在 array1 中也同时出现在所有其它参数数组中的值。注意键名保留不变。


| 函数名 | 比较的东西 | 返回值  |
| --- | --- | --- |
| array_intersect_assoc() | 比较 `$key => $value` | 返回相同的值 |
| array_intersect_key() | 比较 $key | 返回出现在第一个参数中并同时出现在所有其它参数数组中的键名的值 |
| array_intersect_uassoc() | 比较 `$key => $value` 用户可以自定义返回规则 key_compare_func 返回 0 代表相同 | 根据 key_compare_func 规则返回 |
| array_intersect_ukey() | 比较 $key 用户可以自定义返回规则 key_compare_func 返回 0 代表相同 | 根据 key_compare_func 规则返回 |
| array_intersect() | 比较 $value | 返回所有在第一个参数中也同时出现在所有其它参数数组中的值 |

### 20180525 22:40 - 23:20

    array array_merge_recursive ( array $array1 [, array $... ] )

array_merge_recursive() 将一个或多个数组的单元合并起来，一个数组中的值附加在前一个数组的后面。返回作为结果的数组。如果输入的数组中有相同的字符串键名，则这些值会被合并到一个数组中去，这将递归下去，因此如果一个值本身是一个数组，本函数将按照相应的条目把它合并为另一个数组。然而，如果数组具有相同的数组键名，后一个值将不会覆盖原来的值，而是附加到后面。

    array array_pad ( array $array , int $size , mixed $value )

array_pad() 返回 array 的一个拷贝，并用 value 将其填补到 size 指定的长度。如果 size 为正，则填补到数组的右侧，如果为负则从左侧开始填补。如果 size 的绝对值小于或等于 array 数组的长度则没有任何填补。有可能一次最多填补 1048576 个单元。

    number array_product ( array $array )

array_product() 以整数或浮点数返回一个数组中所有值的乘积。

    array array_unique ( array $array [, int $sort_flags = SORT_STRING ] )

array_unique() 移除数组中重复的值，接受 array 作为输入并返回没有重复值的新数组。注意键名保留不变。array_unique() 先将值作为字符串排序，然后对每个值只保留第一个遇到的键名，接着忽略所有后面的键名。这并不意味着在未排序的 array 中同一个值的第一个出现的键名会被保留。

    int array_unshift ( array &$array , mixed $value1 [, mixed $... ] )
    
array_unshift() 将传入的单元插入到 array 数组的开头。注意单元是作为整体被插入的，因此传入单元将保持同样的顺序。所有的数值键名将修改为从零开始重新计数，所有的文字键名保持不变。

**Linux命令**

tail 命令从指定点开始将文件写到标准输出.使用tail命令的-f选项可以方便的查阅正在改变的日志文件,tail -f filename会把filename里最尾部的内容显示在屏幕上,并且不但刷新,使你看到最新的文件内容. 

1．命令格式;

tail[必要参数][选择参数][文件]   

2．命令功能：

用于显示指定文件末尾内容，不指定文件时，作为输入信息进行处理。常用查看日志文件。

3．命令参数：

-f 循环读取

-q 不显示处理信息

-v 显示详细的处理信息

-c<数目> 显示的字节数

-n<行数> 显示行数

--pid=PID 与-f合用,表示在进程ID,PID死掉之后结束. 

-q, --quiet, --silent 从不输出给出文件名的首部 

-s, --sleep-interval=S 与-f合用,表示在每次反复的间隔休眠S秒 


### 20180526 22:40 - 23:20

top命令是Linux下常用的性能分析工具，能够实时显示系统中各个进程的资源占用状况，类似于Windows的任务管理器。下面详细介绍它的使用方法。top是一个动态显示过程,即可以通过用户按键来不断刷新当前状态.如果在前台执行该命令,它将独占前台,直到用户终止该程序为止.比较准确的说,top命令提供了实时的对系统处理器的状态监视.它将显示系统中CPU最“敏感”的任务列表.该命令可以按CPU使用.内存使用和执行时间对任务进行排序；而且该命令的很多特性都可以通过交互式命令或者在个人定制文件中进行设定.

1．命令格式：

top [参数]

2．命令功能：

显示当前系统正在执行的进程的相关信息，包括进程ID、内存占用率、CPU占用率等

3．命令参数：

-b 批处理

-c 显示完整的治命令

-I 忽略失效过程

-s 保密模式

-S 累积模式

-i<时间> 设置间隔时间

-u<用户名> 指定用户名

-p<进程号> 指定进程

-n<次数> 循环显示的次数

[top命令](http://www.cnblogs.com/peida/archive/2012/12/24/2831353.html)


### 20180527 22:40 - 23:40

Linux中的ps命令是Process Status的缩写。ps命令用来列出系统中当前运行的那些进程。ps命令列出的是当前那些进程的快照，就是执行ps命令的那个时刻的那些进程，如果想要动态的显示进程信息，就可以使用top命令。

要对进程进行监测和控制，首先必须要了解当前进程的情况，也就是需要查看当前进程，而 ps 命令就是最基本同时也是非常强大的进程查看命令。使用该命令可以确定有哪些进程正在运行和运行的状态、进程是否结束、进程有没有僵死、哪些进程占用了过多的资源等等。总之大部分信息都是可以通过执行该命令得到的。

ps 为我们提供了进程的一次性的查看，它所提供的查看结果并不动态连续的；如果想对进程时间监控，应该用 top 工具。

kill 命令用于杀死进程。

linux上进程有5种状态: 

1. 运行(正在运行或在运行队列中等待) 

2. 中断(休眠中, 受阻, 在等待某个条件的形成或接受到信号) 

3. 不可中断(收到信号不唤醒和不可运行, 进程必须等待直到有中断发生) 

4. 僵死(进程已终止, 但进程描述符存在, 直到父进程调用wait4()系统调用后释放) 

5. 停止(进程收到SIGSTOP, SIGSTP, SIGTIN, SIGTOU信号后停止运行运行) 

ps工具标识进程的5种状态码: 

D 不可中断 uninterruptible sleep (usually IO) 

R 运行 runnable (on run queue) 

S 中断 sleeping 

T 停止 traced or stopped 

Z 僵死 a defunct (”zombie”) process 

1．命令格式：

ps[参数]

2．命令功能：

用来显示当前进程的状态

3．命令参数：

a  显示所有进程

-a 显示同一终端下的所有程序

-A 显示所有进程

c  显示进程的真实名称

-N 反向选择

-e 等于“-A”

e  显示环境变量

f  显示程序间的关系

-H 显示树状结构

r  显示当前终端的进程

T  显示当前终端的所有程序

u  指定用户的所有进程

-au 显示较详细的资讯

-aux 显示所有包含其他使用者的行程 

-C<命令> 列出指定命令的状况

--lines<行数> 每页显示的行数

--width<字符数> 每页显示的字符数

--help 显示帮助信息

--version 显示版本显示

[Linux 命令 5 分钟](http://roclinux.cn/?page_id=3759)

### 20180528 22:10 - 23:10

**Docker**

列出本机的所有 image 文件。

    docker image ls

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

### 20180529 22:20 - 23:10

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


### 20180530 22:30 - 23:10 
**Docker 网络**

#### 网络类别

查看网络类别
网络的类别为 none，host，bridge 三种，可以通过以下方式查看：

    docker network ls

* none 型网络
* 
顾名思义，此类网络表示容器为独立个体，不与外部通信。

* host 型网络

此类网络表示该容器与宿主机（安装 Docker 的机器）共享网络。

* bridge 型网络

这是容器的默认网络类型，网桥模式意味着容器间可以互相通信，而对外的通信需要借助宿主机，这一形式通常表现为端口号的映射。

查看网络类别详情

    docker network inspect $network-name
    
通过这种方式可以查看 JSON 格式的网络类别，在 Containers 条目中可以看到使用当前网络类型的容器列表，注意 Containers 中只会显示那些已经启动的容器。

创建网络
可以通过以下方式创建一个网络，其中，network-driver 表示网络类别，即 none 或 bridge 或 host，而 network-name 为自定义的网络名：

    docker network create --driver network-driver network-name

如果省略 --driver network-driver 则默认创建 bridge 类型的网络。

为容器指定网络
我们可以创建自定义的网络环境，并将一些容器放入这一网络内，以此管理容器间的网络连通情况。这种局域网网段的模拟实际是由内部 DNS 实现的。以下罗列将容器添加或移除到某一网络中的方法。

将容器添加进某一网络
可以通过以下方式将容器 container-name 加入 $network-name 网络中。注意，一个容器可以属于多个网络。

    docker network connect network-name $container-name
    
之后，当容器启动时，我们就可以在 `docker network inspect $network-name` 的 Containers 中看到这一容器了。

将容器从某一网络中移除

    docker network disconnect network-name container-name
    
在容器生成时指定网络
我们也可以在容器生成时指定网络，使用如下方法：

    docker run --network network-name mirror-name
    
测试网络连通情况
我们可以通过以下方式查询到容器的 IP 地址：

在容器交互模式中使用 ip addr ；

使用 docker inspect $container-name

使用 docker inspect $container-name | grep IPAddress

之后可以使用 ping 指令测试容期间的网络连通情况。没有 ping 命令的容器需要安装 iputils。

删除网络

docker network rm $network-name

[Docker 快速上手指南](https://segmentfault.com/a/1190000008822648)

### 20180602 20:00 - 22:00

**Docker 配置 nginx php-fmp **

1.下载nginx官方镜像和php-fpm镜像

    docker pull nginx
    docker pull bitnami/php-fpm
    
2.开启 php-fmp 容器

    docker run --name myphp -d -it -v /Users/zhengyong/www/:/var/www/html bitnami/php-fpm
    
3.开启 nginx 容器

    docker run -d --name nginx1 -p 8080:80 -v /Users/zhengyong/nginx:/usr/share/nginx/html nginx
    
4.修改 nginx 配置

登录容器

    docker exec -it nginx1 /bin/bash

> -i : --interactive，交互模式。
-t : --tty，开启一个伪终端。
/bin/bash : 必须写，否则会报错。这是开始伪终端时，进入bash界面，也就是命令行界面。

使用专用的复制命令将配置文件复制到宿主机，然后在宿主机进行编辑编辑完成后覆盖到容器内

    docker cp nginx1:/etc/nginx/conf.d/default.conf default.conf
    
在宿主机修改配置文件的php部分，内容如下：

    location ~ \.php$ {
          root           /var/www/html;
          fastcgi_pass   172.17.0.5:9000;
          fastcgi_index  index.php;
          fastcgi_param  SCRIPT_FILENAME  $document_root$fas    tcgi_script_name;
          fastcgi_param  SCRIPT_NAME      $fastcgi_script_name;
          include        fastcgi_params;
      }
      
      
fastcgi_pass 的 ip 地址为 php-fmp 的 IP 地址，可以通过

    docker inspect myphp
    
查看 ip 地址。
修改完成后覆盖 nginx 容器中的配置文件

    docker cp default.conf nginx1:/etc/nginx/conf.d/default.conf

进入到nginx容器中重新载入配置文件

    docker exec -it nginx1 /bin/bash
    service nginx reload


### 20180603 21:30 - 22:30

**解决 File Not Found 的问题**

在 Docker 搭建 nginx php-fmp 时，遇到一个问题，访问 php 文件一直报 File Not Found 。
上网搜大多都是说配置路径不对，以及权限没开。

查看日志

    docker logs nginx1
    
发现报错：

    FastCGI sent in stderr: "Primary script unknown" while reading response header from upstream
    
按照网上搜的解决方案发现并没什么用，我就想在使用 Docker 搭建环境时，我们这里有两个路径，一个是 nginx 的路径，一个是 php-fmp 的路径。我在配置 default.conf 时 fastcgi_param 的路径配置的是 nginx 的路径，访问 html 文件正常，但是访问 php 文件一直报 File Not Found 。如果把 default.conf 的路径换成 php-fmp 的路径试一下，换完之后发现问题被解决了。


[PHP 设计模式](https://github.com/zyfoolboy/PHP-work-issues/blob/master/page/PHP%20%E6%9E%B6%E6%9E%84.md)


