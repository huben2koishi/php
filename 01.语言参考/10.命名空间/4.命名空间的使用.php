<?php

namespace Foo\Bar;
include "4.file.php";

const FOO =2;
function foo(){}
class foo{
    static function staticMethod(){}
}

// 访问命名空间中的元素有三种方式
// 非限定名称
foo(); // 解析为 Foo\Bar\foo()
foo::staticMethod(); // 解析为 Foo\Bar\foo 的静态方法 staticMethod()
echo FOO; // 解析为 Foo\Bar\FOO

// 限定名称
subNamespace\foo();
subNamespace\foo::staticMethod();
echo subNamespace\FOO;

// 完全限定名称
\Foo\Bar\foo();
\Foo\Bar\subNamespace\foo::staticMethod();
echo \Foo\Bar\FOO;

// 在命名空间内部访问全局类 函数 和 常量
$a = \strlen('hi');
$b = \INI_ALL;
$C = new \Exception('error');