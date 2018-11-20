<?php
// self:: 的限制. self:: 或 __CLASS__ 对当前类的静态引用, 取决与定义当前方法所在的类
class A{
    public static function who() {
        echo __CLASS__;
    }
    
    public static function test() {
        self::who();
    }
}
class B extends A{
    public static function who() {
        echo __CLASS__;
    }
}
B::test();

// static:: 的限制.