<?php
class MyClass{
    const constant = 'constant value';
    
    function showConstant(){
        echo self::constant.'<br/>';
    }
}
// 1.类名::类常量名
echo MyClass::constant.'<br/>';

// 2.类变量::类常量名
$className = 'MyClass';
echo $className::constant.'<br/>';

$class = new MyClass();
// 3.对象::类常量名
echo $class::constant.'<br/>';
// 4.对象->方法
$class->showConstant();