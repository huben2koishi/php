<?php
$a = 1.234;
$b = 1.2e3;
$c = 7E-10;

$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

if(abs($a-$b) < $epsilon) {
    echo "true";
}

// NAN 在浮点数运算中未定义或不可表述的值
// 只在于 true 进行松散比较是返回 true, 与任意值不相等, 包括自身
// 使用 is_nan() 检查
$nan = acos(8);
var_dump($nan);
var_dump(is_nan($nan));