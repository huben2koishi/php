<?php
function foo($arg_1, $arg_2,/*..., */
             $arg_n) {
    echo "Example function";
    return 0;
}

$make_function = true;

// 函数可在定义前调用
// 若函数定义有条件, 则只能在定义之后调用
foo2();

if ($make_function) {
    function foo1() {
        echo "foo1 此时被创建<br/>";
    }
}

foo1();

function foo2() {
    echo "foo2 一直存在<br/>";
}

// 函数中能嵌套函数, 嵌套的函数在原函数调用时定义
function f1() {
    function f2() {
        echo "f2";
    }
}

// 递归函数
function recursion($a) {
    if ($a < 20) {
        echo "$a<br/>";
        recursion($a + 1);
    }
}

recursion(5);