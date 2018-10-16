<?php
echo 'this is a simple string'.'<br/>';

// 定义一个字符串的最简单的方法是用单引号把它包围起来（字符 '）。

// 可以录入多行
echo 'You can also have embedded newlines in 
strings this way as it is
okay to do'.'<br/>';

// 单引号中的字符串, 转义符只识别 \\ 和 \' , 不会识别变量名

echo 'Arnold once said: "I\'ll be back"'.'<br/>';
echo 'You deleted C:\\*.*?'.'<br/>';
echo 'You deleted C:\*.*?'.'<br/>';
echo 'This will not expand: \n a newline'.'<br/>';
echo 'Variables do not $expand $either'.'<br/>';

// 如果字符串是包围在双引号("")中， PHP 将对以下特殊的字符进行解析
// \n \r \t \v \e \f \\ \$ \" \[0-7]{1,3} \x[0-9a-fA-F]{1,2}
// 双引号中的变量名将会被解析
$a = 123;
echo "value a = $a\n";
echo "\thello";