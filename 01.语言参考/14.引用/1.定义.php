<?php
// 引用允许用两个变量指向同一个内容
$a = &$b;

// 对未定义变量使用引用
function foo(&$var){}

foo($a);

$b=array();
foo($b['b']);
var_dump(array_key_exists('b',$b));

$c = new StdClass();
foo($c->d);
var_dump(property_exists($c,'d'));