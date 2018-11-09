<?php
// :: 范围解析操作符, 用于访问静态成员、类常量

// 在类的外部使用 ::
class MyClass {
    const CONST_VALUE = 'A constant value';
}

$class_name = 'MyClass';

echo $class_name::CONST_VALUE;
echo MyClass::CONST_VALUE;

echo '<hr/>';

// 在类定义内部使用 ::
class OtherClass extends MyClass {
    public static $static_value = 'Static var';

    public static function doubleColon() {
        echo parent::CONST_VALUE . '<br/>';
        echo self::$static_value . '<br/>';
    }
}

$class_name='OtherClass';
echo $class_name::doubleColon();
echo OtherClass::doubleColon();