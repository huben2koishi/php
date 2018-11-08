<?php
// include 包含并运行指定文件 未找到文件时发出一个警告
echo @"A $fruit is $color";
echo "<hr/>";

include "include/vars.php";
echo "A $fruit is $color";
echo "<hr/>";

// include 可以返回值 默认为1
echo (include "include/return.php");
echo (include "include/noreturn.php");

// include_once 同 include, 但会检查是否已经包含，如果是则不会再次包含