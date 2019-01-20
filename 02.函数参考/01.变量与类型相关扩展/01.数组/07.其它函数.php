<?php
// array_rand($arr) 从数组随机取出n个元素的键名
$arr = ['a','b','c','d','e'];
echo array_rand($arr).'<br/>';
var_dump(array_rand($arr,2));
echo '<hr/>';

// array_sum($arr) 返回数组值的和
$arr = [1,2,3,4,'abc','5月'];
echo array_sum($arr);
echo '<hr/>';

// range($n1,$n2,$step) 返回$n1到$n2, 步长为$step的索引数组
var_dump(range(2,6, 2));