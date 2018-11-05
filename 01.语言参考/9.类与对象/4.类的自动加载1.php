<?php
spl_autoload_register(function ($className){
   require_once $className.'.php';
});

$obj1 = new MyClass1();
$obj2 = new MyClass2();

