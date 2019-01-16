<?php
// ltrim() 去除字符串开头的空白符
// rtrim() 去除字符串末尾的空白符
// trim()  去除字符串开头和末尾的空白符
$str = "   hello   ";

echo "<pre>" .
    trim($str) . "<br/>" .
    ltrim($str) . "<br/>" .
    rtrim($str);

// 空白符  ASCII   含义
// ' '      32    空格
// '\t'     9     制表符
// '\n'     10    换行符
// '\r'     13    回车符
// '\0'     0     空字节符
// '\x0B'   11    垂直制表符