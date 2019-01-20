<?php
// array_push() 入栈, 返回数组当前长度
//  array_pop() 出战, 返回当前弹出的元素值
$arr = [1,2,3];

array_push($arr,'a');

echo array_pop($arr);

echo '<hr/>';

// array_shift() 出队, 返回当前出队的元素
// array_unshift() 入队, 返回数组当前长度
$arr = ['a'=>10,'b'=>20,'c'=>30];
echo array_shift($arr).'<br/>';
echo array_shift($arr).'<br/>';
echo array_shift($arr).'<br/>';
// array_unshift()是将元素插入数组头部
array_unshift($arr,1,2);
array_unshift($arr,'a');
var_dump($arr);