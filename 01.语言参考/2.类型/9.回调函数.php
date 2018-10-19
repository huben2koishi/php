<?php
function my_callable_function() {
    echo "my_callable_function";
}

class MyClass {
    static function my_callable_method() {
        echo "my_callable_method";
    }
}

call_user_func('my_callable_function');
echo "<br/>";

call_user_func(array('MyClass', 'my_callable_method'));
echo "<br/>";

$obj = new MyClass();
call_user_func(array($obj, 'my_callable_method'));
echo "<br/>";

call_user_func('MyClass::my_callable_method');
echo "<br/>";

class A {
    public static function who() {
        echo "A";
    }
}

class B extends A {
    public static function who() {
        echo "B";
    }
}

call_user_func(array('B', 'parent::who'));
echo "<br/>";

class C{
    public function __invoke($name){
        echo "hello ".$name;
    }
}
$c =new C();
call_user_func($c,"php");