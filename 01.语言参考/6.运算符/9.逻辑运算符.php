<?php
$a = true;
$b = false;

echo $a and $b.'<br/>'; // 与
echo $a or $b.'<br/>';  // 或
echo $a xor $b.'<br/>'; // 异或
echo !$a.'<br/>';       // 非
echo $a && $b.'<br/>';  // 与
echo $a || $b.'<br/>';  // 或
echo '<hr/>';

// foo() 不会被调用，被运算符“短路”了
$c = (false && foo());
$d = (true  || foo());
$e = (false and foo());
$f = (true  or  foo());

// 两种 与 或 的运算优先级不同
$g = false || true;
$h = false or true;
var_dump($g,$h);

$i = true && false;
$j = true and false;
var_dump($i,$j);