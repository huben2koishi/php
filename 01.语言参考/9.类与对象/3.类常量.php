<?php
class MyClass{
    const constant = 'constant value';
    
    function showConstant(){
        echo self::constant.'<br/>';
    }
}

echo MyClass::constant.'<br/>';

$className = 'MyClass';
echo $className::constant.'<br/>';

$class = new MyClass();
$class->showConstant();
echo $class::constant.'<br/>';