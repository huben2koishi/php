<?php
// 函数的参数默认为值传递
function fun1($string) {
    $string .= " and something extra.";
}

$str = "This is a string, ";
fun1($str);
echo $str . "<br/>";

// 引用传递
function fun2(&$string) {
    $string .= " and something extra.";
}

fun2($str);
echo $str . "<br/>";

echo "<hr/>";

// 默认参数
function make($type = "Juice") {
    return "This is a cup of $type.";
}

echo make() . "<br/>";
echo make(null) . "<br/>";
echo make("Milk") . "<br/>";

echo "<hr/>";

// 类型声明 在函数调用时要求参数为特定类型
class a {
}

class b extends a {
}

class c {
}

function f(a $a) {
    echo get_class($a) . "<br/>";
}

f(new a);
f(new b);
// f(new c);
echo "<hr/>";

// 严格模式 传入的参数类型必须严格等于要求的类型, 除了 int 可传给 float
// declare(strict_types=1);

// 可变数量的参数列表
function add(...$numbers) {
    $result = 0;
    foreach ($numbers as $number) {
        $result += $number;
    }
    return $result;
}

echo add(1, 2, 3, 4);