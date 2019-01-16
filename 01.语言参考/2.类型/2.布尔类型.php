<?php
$action = "show version";
if ($action == "show version"){
    echo "The version is 1.23";
}

if (is_string($action)) {
    echo "<hr/>";
}

// 将一个值转换成 bool, 可用 (bool) 强制转换
//     0 '' null '0' [] 会转化为 false
//     其它 整型 浮点型 字符串 数组 对象 均会转化为 true