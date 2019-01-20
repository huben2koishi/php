<?php
// array_filter($arr,callback) 将元素依次处理
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
function odd($n) {
    return $n & 1;
}

function even($n) {
    return !($n & 1);
}

var_dump(array_filter($arr, 'odd'));
var_dump(array_filter($arr, 'even'));
echo '<hr/>';

// array_walk($arr,callback)
$arr = ['name'=>'Jack','age'=>18,'sex'=>'male'];
function printArr($val,$key){
    echo '键'.$key.'的值为: '.$val.'<br/>';
}
array_walk($arr,'printArr');
echo '<hr/>';

// array_map(callback,$arr...) 将回调函数作用于多个数组
$arr1 = [1,2,3,4,5];
$arr2 = [2,4,6,8,10];
function f($val1,$val2){
    return $val1.'的两倍是: '.$val2;
}
var_dump(array_map('f',$arr1,$arr2));
