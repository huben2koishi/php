<?php

class SubObject {
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable {
    public $obj1, $obj2;

    public function __clone() {
        $this->obj1 = clone $this->obj1;
    }
}

$obj = new MyCloneable();
$obj->obj1 = new SubObject();
$obj->obj2 = new SubObject();

$obj2 = clone $obj;

echo "<pre>原始对象:<br/>";
var_dump($obj) ;
echo "<br/>克隆对象:<br/>";
var_dump( $obj2) ;