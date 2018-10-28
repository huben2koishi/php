<?php
function foo() {
    echo "In foo()<br/>";
}

function bar($arg = '') {
    echo "In bar()<br/>argument was '$arg'<br/>";
}

function my_echo($string) {
    echo $string;
}

$func1 = 'foo';
$func1();

$func2 = 'bar';
$func2('test');

$func3 = 'my_echo';
my_echo('test');
echo "<hr/>";

// 可以用可变函数的语法来调用一个对象的方法
class Foo {
    function bar() {
        echo "this is bar";
    }
}

$foo = new Foo();
$fun = 'bar';
$foo->$fun();