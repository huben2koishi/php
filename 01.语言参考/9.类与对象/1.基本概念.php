<?php

// class
class simple_class {
    public $var = 'a default value';

    public function display_var() {
        echo $this->var;
    }
}

// new 关键字
$a = new simple_class();
$class_name = 'simple_class';
$b = new $class_name();

echo get_class($a) == get_class($b);
echo '<hr/>';

// 对象赋值
$instance = new simple_class();
$assigned = $instance;
$reference = &$instance;

$instance->var = '$assigned will have this value';

var_dump($instance);
echo '<br/>';
var_dump($assigned);
echo '<br/>';
var_dump($reference);
echo '<br/>';

$instance = null;

var_dump($instance);
echo '<br/>';
var_dump($assigned);
echo '<br/>';
var_dump($reference);
echo '<br/>';

echo '<hr/>';

// 创建新对象
class Test {
    public static function getNew() {
        return new static;// 基于当前的类创建对象
    }

    public function getObj() {
        return new self();// 返回当前类实例对象
    }
}

class TestExtend extends Test {
    public function getParent() {
        return new parent();// 返回当前类的父类实例对象
    }
}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

echo '<hr/>';

// extends 继承
class extend_class extends simple_class {
    function display_var() {
        echo "Extending class<br/>";
        parent::display_var();
    }
}

$extend = new extend_class();
$extend->display_var();

echo '<hr/>';

// ::class
//namespace NS;
class class_name {

}

echo class_name::class;
