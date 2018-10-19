<?php
$a = 1;
// 在 test() 中 $a 并没有被初始化
function test() {
    echo $a;
}

//test();
echo "<br/><hr/>";

// global 关键字
$b = 2;
function add() {
    global $a, $b;
    $b = $a + $b;
}

add();
echo $b;
echo "<hr/>";

// $globals 数组
function sub() {
    $GLOBALS['b'] -= $GLOBALS['a'];
}

sub();
echo $b;
echo "<hr/>";

// 超级全局变量
function test_global() {
    // 大多数的预定义变量并不 "super"，它们需要用 'global' 关键字来使它们在函数的本地区域中有效
    global $HTTP_POST_VARS;

    echo $HTTP_POST_VARS['name'];

    // 超级全局变量在任何范围内都有效，它们并不需要 'global' 声明
    echo $_POST['name'];
}

// 静态变量
function test_static() {
    static $a = 0;
    echo $a;
    $a++;
}

test_static();
test_static();
test_static();
echo "<hr/>";

// 静态变量与递归
function test_recursive() {
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test_recursive();
    }
    $count--;
}

test_recursive();