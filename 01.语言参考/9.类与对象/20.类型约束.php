<?php
class MyClass{
    public function test(OtherClass $otherClass) {
        echo $otherClass->var.'<br/>';
    }
    
    public function test_array(array $input_array) {
        print_r($input_array);
        echo '<br/>';
    }
    
    public function test_callback(callable $callback,$data) {
        call_user_func($callback,$data);
    }
    
    public function test_interface(Traversable $iterator) {
        echo get_class($iterator).'<br/>';
    }
}

class OtherClass{
    public $var = 'Hello World';
}

$myClass = new MyClass();
$otherClass = new OtherClass();

$myClass->test($otherClass);
$myClass->test_array(array('a','b','c'));
$myClass->test_interface(new ArrayObject(array()));
$myClass->test_callback('var_dump',1);