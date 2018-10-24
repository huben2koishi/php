<?php
// continue 跳过当前循环, 继续下一个循环. 可接受一个可选的数字来决定跳过几重循环

$i=0;
while (++$i){
    switch ($i){
        case 5:
            continue;
        case 10:
            echo 'at 10<br/>';
            break 2;
        default:
            echo 'x<br/>';
    }
}