<?php
// array_values($arr) 返回数组中所有元素的值
$arr = ['a' => 12, 'b' => 14, 'c' => 16, 'd' => 18];
print_r(array_values($arr));
echo '<hr/>';

// array_keys($arr) 返回数组中所有键的值
print_r(array_keys($arr));
echo '<br/>';

foreach (array_keys($arr)as $key) {
    echo $key.'=>'.$arr[$key].'<br/>';
}
echo '<hr/>';

// array_key_exists($key,$arr) 检测键名是否存在
if (array_key_exists('b',$arr)){
    echo '$arr 中存在键a';
} else {
    echo '$arr 中不存在键a';
}
echo '<hr/>';

// in_array($val,$arr) 判断某值是否存在数组中
var_dump(in_array('14',$arr));
var_dump(in_array('14a',$arr,true));
echo '<hr/>';

// array_search($val,$arr) 返回数组中指定值的键名
echo array_search(16,$arr);