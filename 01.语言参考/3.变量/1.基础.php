<?php
// 变量由 $ 后跟变量名来表示
// 变量名由字母下滑线开头, 后跟任意数量的数字字母下划线
// 正则表达式: ^\$[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$
// $this 是一个特殊的变量，它不能被赋值

$var = 'Bob';
$Var = 'Joe';
echo "$var, $Var";      // 输出 "Bob, Joe"
echo "<hr/>";

//$4site = 'not yet';     // 非法变量名；以数字开头
$_4site = 'not yet';    // 合法变量名；以下划线开头
$i站点is = 'manlike';   // 合法变量名；可以用中文

// 变量默认使用值传递, 可使用 & 引用传递
$foo = 'Bob';
$bar = &$foo;
$bar = 'Mike';
echo $foo;