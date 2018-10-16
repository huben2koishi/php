<?php
$a = 1234; // 十进制数
$b = -123; // 负数
$c = 0123; // 八进制数 (等于十进制 83)
$d = 0x1A; // 十六进制数 (等于十进制 26)
$e = 0b11111111; // 二进制数字 (等于十进制 255)


$lager_number = 9223372036854775807;
var_dump($lager_number);

// 结果溢出 integer 范围时, 自动转换成 float
$lager_number = 9223372036854775808;
var_dump($lager_number);

$million = 1000000;
$lager_number = 50000000000000 * $million;
var_dump($lager_number);


// 除法运算结果为 float
var_dump(25/7);
// 强制转换为 int, 舍弃小数部分
var_dump((int) (25/7));
// round() 四舍五入
var_dump(round(25/7));  //