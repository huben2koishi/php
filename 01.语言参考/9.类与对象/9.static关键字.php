<?php
// 若使用 static 声明属性或方法, 就可以不实例化类而直接访问
class foo{
    public static $static_value = 'foo';

    public function staticValue() {
        return self::$static_value;
    }
}

class bar extends foo{
    public function fooStatic() {
        return parent::$static_value;
    }
}

echo foo::$static_value.'<br/>';

$foo = new foo();
echo $foo->staticValue().'<br/>';
// echo foo->$static_value;

echo $foo::$static_value.'<br/>';
$class_name = 'foo';
echo $class_name::$static_value.'<br/>';

echo bar::$static_value.'<br/>';

$bar = new bar();
echo $bar->fooStatic().'<br/>';