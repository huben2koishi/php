<?php
// count($arr) 返回数组元素数量
$arr = [1,2,3,4,['a','b',[5,6,7]]];
echo count($arr).'<br/>';
// 可选参数 mode 0 不检测多维数组 1 检测多维数组
echo count($arr,1);
echo '<hr/>';

// array_count_values($arr) 统计元素值出现的次数
$arr = ['a'=>10,'b'=>20,'c'=>'abc','d'=>20];
var_dump(array_count_values($arr));
echo '<hr/>';

// array_unique($arr) 删除数组中重复的值
$arr = [1,1,5,2,1,6,3,3,2,4];
var_dump(array_unique($arr));