<?php
// 代码复用 trait
trait ezReflectionReturnInfo {
    function getReturnType() {
    }

    function getReturnDescription() {
    }
}

class ezReflectionFunction{
    use ezReflectionReturnInfo;


}

// 优先级 子类方法 > trait > 父类方法
class Base{
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld{
    public function sayHello(){
        parent::sayHello();
        echo 'world';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$obj = new MyHelloWorld();
$obj -> sayHello();