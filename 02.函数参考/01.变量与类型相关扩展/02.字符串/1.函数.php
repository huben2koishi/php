<?php
include "../hh.php";

// strpos($string, $substring) 查找子字符串
$str1 = 'hello';
if (strpos($str1,'he') !== false)
    print "'hello' 包含 'he'";
hr();

// substr($string, $start, $length) 提取子字符串
$str2 = 'abcdefg';
echo substr($str2,1);br();            // bcdefg
echo substr($str2,1,4);br();   // bcde
echo substr($str2,-3);br();           // efg
echo substr($str2,-4,-1);br(); // def
hr();

// substr_replace($old_str, $new_str, $start, $length) 替换子字符串
$str3 = 'abcdefg';
echo substr_replace($str2,'*',1);br();            // a*
echo substr_replace($str2,'*',1,4);br();   // a*fg
echo substr_replace($str2,'*',-3);br();           // abcd*
echo substr_replace($str2,'*',-4,-1);br(); // abc*g
hr();

// strrev() 反转字符串
$str4 = 'abcd';
echo strrev($str4);
hr();
