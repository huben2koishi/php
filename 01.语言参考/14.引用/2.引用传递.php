<?php
//  将一个变量通过引用传递给函数
function foo (&$var){
    $var++;
}
$a=5;
foo($a);
echo $a;