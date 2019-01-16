<?php

$rows = 'select message from messages where id = 1';

$tabbed = str_replace(' ','\t',$rows);
$spaced = str_replace('\t',' ',$rows);

print "With tabs: <pre>$tabbed</pre>";
print "With spaces: <pre>$spaced</pre>";

// mixed str_replace(mixed $search, mixed $replace, mixed $subject [, int $count])
// 返回一个将 $subject 中的 $search 替换为 $replace 后的字符串或数组
//     $search 查找的目标值
//     $replace 要替换 $search 的值
//     $subject 要执行替换的值
//     $count 替换的次数