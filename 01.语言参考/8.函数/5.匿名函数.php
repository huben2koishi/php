<?php
echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'hello-world');
echo "<hr/>";

$greet = function ($name) {
    printf("Hello %s<br/>", $name);
};

$greet('World');
$greet('PHP');
echo "<hr/>";

// 从父作用域继承变量
$message = 'hello';
$fun1 = function () use ($message) {
    var_dump($message);
};
$fun1();
$message = 'world';
$fun1();

$message = 'hello';
$fun2 = function () use (&$message) {
    var_dump($message);
};
$fun2();
$message = 'world';
$fun2();