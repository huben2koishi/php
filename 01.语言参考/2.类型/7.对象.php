<?php
class foo{
    function do_foo(){
        echo "do_foo";
    }
}
$bar = new foo();
$bar->do_foo();
echo "<hr/>";

// 转换为对象
//     一个对象转换成对象，它将不会有任何变化
//     其它任何类型的值被转换成对象，将会创建一个内置类 stdClass 的实例
//     array 转换成 object 将使键名成为属性名并具有相对应的值，除了数字键，不迭代就无法被访问
$obj = (object)array('1'=>"foo");
var_dump(isset($obj->{'1'}));
echo "<br/>";
var_dump(key($obj));
echo "<br/>";
//     对于其他值，会包含进成员变量名 scalar
$obj2 = (object) 'foo';
echo $obj2->scalar;