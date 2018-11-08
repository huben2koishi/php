<?php
// 类的对象只能访问public属性, 类的方法可以访问所有属性
class MyClass {
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello() {
        echo $this->public . '<br/>';
        echo $this->protected . '<br/>';
        echo $this->private . '<br/>';
    }
}

$obj = new MyClass();
echo $obj->public . '<br/>';
// echo $obj->protected.'<br/>';
// echo $obj->private.'<br/>';

$obj->printHello();

// 子类只能访问父类的 public 和 protected 属性
class MyClass2 extends MyClass {
    public $public = 'Public2';
    protected $protected = 'Protected2';
}

$obj2 = new MyClass2();
$obj2->printHello();

echo '<hr/>';

// 类的对象只能访问 public 方法
class MyClass3 {
    public function __construct() {
    }

    public function MyPublic() {
    }

    protected function MyProtected() {
    }

    private function MyPrivate() {
    }

    function Foo() {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$obj3 = new MyClass3();
$obj3->MyPublic();
$obj3->Foo();

// 子类的对象只能访问父类的 public 和 protected 方法
class MyClass4 extends MyClass3 {
    function Foo2() {
        $this->MyPublic();
        $this->MyProtected();
    }
}

$obj4 = new MyClass3();
$obj4->MyPublic();
$obj4->Foo();

class Bar {
    function test() {
        $this->testPublic();
        $this->testPrivate();
    }

    public function testPublic() {
        echo "Bar::testPublic" . '<br/>';
    }

    private function testPrivate() {
        echo "Bar::testPrivate" . '<br/>';
    }
}

class Foo extends Bar {
    public function testPublic() {
        echo "Foo::testPublic" . '<br/>';
    }

    private function testPrivate() {
        echo "Foo::testPrivate" . '<br/>';
    }
}

$obj5 = new Foo();
$obj5->test();

echo '<hr/>';

// 同一个类的不同对象可以相互访问非 public 成员
class Test{
    private $foo;

    public function __construct($foo) {
        $this->foo=$foo;
    }

    private function bar() {
        echo 'In private method';
    }

    public function baz(Test $other) {
        var_dump($other->foo);
        $other->bar();
    }
}

$test = new Test('test');
$test->baz(new Test('other'));