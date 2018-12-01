<?php

// 用函数找到引用应该被绑定在那个变量上
class foo {
    public $value = 42;

    public function &getValue() {
        return $this->value;
    }
}

$obj = new foo();
$myValue = &$obj->getValue();

$obj->value = 2;
echo $myValue;