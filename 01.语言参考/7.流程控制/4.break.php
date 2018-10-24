<?php
// break 跳出当前循环, 可接受一个可选的数字来决定跳出几重循环

$i=0;
while (++$i){
    switch ($i){
        case 5:
            echo 'at 5<br/>';
            break;  // 默认为 break 1;
        case 10:
            echo 'at 10<br/>';
            break 2;
        default:
            echo 'x<br/>';
    }
}