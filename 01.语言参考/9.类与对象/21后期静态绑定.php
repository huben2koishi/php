<?php

// self:: 的限制. self:: 或 __CLASS__ 对当前类的静态引用, 取决与定义当前方法所在的类
class A {
    public static function who() {
        echo __CLASS__;
    }
    
    public static function test() {
        self::who();
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();

echo '<hr/>';

// static:: 的限制.
class C {
    public static function who() {
        echo __CLASS__;
    }
    
    public static function test() {
        static::who();
    }
}

class D extends C {
    public static function who() {
        echo __CLASS__;
    }
}

D::test();

echo '<hr/>';

// 非静态环境下使用 static::

class E {
    private function foo() {
        echo 'success!<br/>';
    }
    
    public function test() {
        $this->foo();
        static::foo();
    }
}
class F extends E{

}

class G extends E{
    private function who() {
    
    }
}
$f=new F();
$f->test();
$g=new G();
$g->test();