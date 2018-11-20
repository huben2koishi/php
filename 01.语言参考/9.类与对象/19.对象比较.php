<?php
// 比较运算符 ==  如果两个对象的属性和属性值都相等，且是同一个类的实例，则相等
// 全等运算符 === 两个对象变量一定要指向某个类的同一个实例才相等

function bool2str($bool) {
    if ($bool === true) {
        return 'true';
    } else {
        return 'false';
    }
}

function compareObjects($obj1, $obj2) {
    echo 'obj1 == obj2 : ' . bool2str($obj1 == $obj2) . "<br/>";
    echo 'obj1 != obj2 : ' . bool2str($obj1 != $obj2) . "<br/>";
    echo 'obj1 === obj2 : ' . bool2str($obj1 === $obj2) . "<br/>";
    echo 'obj1 !== obj2 : ' . bool2str($obj1 !== $obj2) . "<br/>";
}

class Flag {
    public $flag;

    function __construct($flag = true) {
        $this->flag = $flag;
    }
}

class OtherFlag {
    public $flag;

    function __construct($flag = true) {
        $this->flag = $flag;
    }
}

$obj1 = new Flag();
$obj2 = new Flag();
$obj3 = $obj1;
$obj4 = new OtherFlag();

echo "同一个类的实例<br/>";
compareObjects($obj1, $obj2);

echo "<br/>同一个引用<br/>";
compareObjects($obj1, $obj3);

echo "<br/>不同类相同属性<br/>";
compareObjects($obj1, $obj4);