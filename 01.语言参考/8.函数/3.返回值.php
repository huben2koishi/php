<?php
// 使用 return 返回值
function square($num) {
    return $num * $num;
}

echo square(5);
echo "<hr/>";

// 返回数组
function small_numbers() {
    return array(0, 1, 2);
}

list($a, $b, $c) = small_numbers();
var_dump($a, $b, $c);
echo "<hr/>";

// 返回一个引用
function &return_reference() {
    $str = "string";
    return $str;
}

$new_ref = &return_reference();
var_dump($new_ref);
echo "<hr/>";

// 返回类型的声明
function sum($a, $b): float {
    return $a + $b;
}
var_dump(sum(1,2));
echo "<hr/>";
