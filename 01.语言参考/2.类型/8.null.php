<?php
// 在以下情况变量被认为是 null
//     被赋值为 null
//     尚未被赋值
//     被 unset()
$null1 = null;
$null2;
$null3 = 1;
unset($null3);
var_dump($null1, @$null2, @$null3);


// 转换到 NULL
//     使用 (unset) $var 将一个变量转换为 null 将不会删除该变量或 unset 其值。仅是返回 NULL 值而已