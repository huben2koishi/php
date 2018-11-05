<?php

// 构造函数 具有构造函数的类在创建新对象时会先调用该方法
class BaseClass {
    function __construct() {
        print "In BaseClass constructor<br/>";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "In SubClass constructor<br/>";
    }
}

class OtherClass extends BaseClass {

}

$obj1 = new BaseClass();
$obj2 = new SubClass();
$obj3 = new OtherClass();

// 析构函数 某个对象所有引用都被删除或对象被显式销毁时调用
class MyDestructableClass {
    function __construct() {
        print "In constructor<br/>";
        $this->name = "MyDestructableClass";
    }
    
    function __destruct() {
        print "Destroying " . $this->name . "<br/>";
    }
}

$obj4 = new MyDestructableClass();