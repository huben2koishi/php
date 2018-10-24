<?php
// continue 跳过当前循环, 继续下一个循环. 可接受一个可选的数字来决定跳过几重循环

$i = 0;
while ($i++ < 3) {
    echo "Outer<br />\n";
    while (1) {
        echo "Middle<br />\n";
        while (1) {
            echo "Inner<br />\n";
            continue 3;
        }
        echo "This never gets output.<br />\n";
    }
    echo "Neither does this.<br />\n";
}