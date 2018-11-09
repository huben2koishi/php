<?php

// 抽象类不能被实例化, 其子类必须重写其抽象方法
abstract class AbstractClass {
    abstract protected function getValue();

    abstract protected function prefixValue($prefix);

    public function printOut() {
        echo $this->getValue() . '<br/>';
    }
}

class ConcreteClass1 extends AbstractClass{
    protected function getValue() {
        return "ConcreteClass1";
    }
    public function prefixValue($prefix) {
        return"{$prefix}ConcreteClass1<br/>";
    }
}

$class1 = new ConcreteClass1();
$class1->printOut();
echo $class1->prefixValue("foo_");

class ConcreteClass2 extends AbstractClass{
    public function getValue() {
        return "ConcreteClass2";
    }
    public function prefixValue($prefix) {
        return"{$prefix}ConcreteClass2<br/>";
    }
}

$class1 = new ConcreteClass2();
$class1->printOut();
echo $class1->prefixValue("foo_");