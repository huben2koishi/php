<?php
$a = 5;
$b = 10;

echo ($a == $b) . '<br/>';     // 等于
echo ($a === $b) . '<br/>';    // 全等
echo ($a != $b) . '<br/>';     // 不等
echo ($a <> $b) . '<br/>';     // 不等
echo ($a !== $b) . '<br/>';    // 不全等
echo ($a < $b) . '<br/>';      // 小于
echo ($a > $b) . '<br/>';      // 大于
echo ($a <= $b) . '<br/>';     // 小于等于
echo ($a >= $b) . '<br/>';     // 大于等于
echo ($a <=> $b) . '<br/>';    // 组合比较
echo ($a ?? $b) . '<br/>';     // null 合并

var_dump(0 == "a");
var_dump("1" == "01");
var_dump("10" == "1e1");
var_dump(100 == "1e2");

echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

//