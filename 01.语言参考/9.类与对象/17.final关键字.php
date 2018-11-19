<?php

// final 修饰的类不能被继承, 修饰的方法不能被子类重写
class BaseClass1 {
    public final function test() {
        echo "BaseClass::test() called<br/>";
    }
}

class ChildClass1 extends BaseClass1 {
    public function test() {
        echo "ChildClass::test() called<br/>";
    }
}

final class BaseClass2 {
    public final function test() {
        echo "BaseClass::test() called<br/>";
    }
}

class ChildClass2 extends BaseClass2 {
}

