<?php

class AClass {
}

interface AInterface {
}

trait ATrait {
}

var_dump(new class(10) extends AClass implements AInterface {
    private $num;

    public function __construct($num) {
        $this->num = $num;
    }

    use ATrait;
});

// 匿名类嵌套进普通类后, 只能访问外部类的 public 方法和属性,
// 要访问protected 和 private 方法, 匿名类可继承外部类, 属性 必须通过构造器传入
class Outer{
    private $prop1 = 1;
    protected $prop2 = 2;
    protected function fun1(){
        return 3;
    }

    public function fun2() {
        return new class($this->prop1) extends Outer{
            private  $prop3;
            public function __construct($prop) {
                $this->prop3 = $prop;
            }
            public function fun3(){
                return $this->prop2+$this->prop3+$this->fun1();
            }
        };
    }
}

echo (new Outer())->fun2()->fun3();