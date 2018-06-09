<?php
function test_global_ref() {
    global $obj;//global 是以引用的方式实现的
    $obj = &new stdclass;//php 4 时代 &new 代表对象的传递方式是引用传递（php 4 对象的传递方式默认为值传递）,这句代码我的理解不是负值，而是将$obj 的引用指向 new stdclass，所以输出为 NULL；
}

function test_global_noref() {
    global $obj;
    $obj = new stdclass;
}

test_global_ref();
var_dump($obj);//输出 NULL 
test_global_noref();
var_dump($obj);
?>
