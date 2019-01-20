<?php
include "../hh.php";

$arr = ['d' => 5, 'b' => 1, 'a' => 3, 'c' => 7];
echo '原数组: ';
print_r($arr);
br();

// 1. sort() 根据值升序, 键不保留
sort($arr);
print_r($arr);
br();

// 2. rsort() 根据值升序, 键不保留
rsort($arr);
print_r($arr);
hr();

$arr = ['d' => 5, 'b' => 1, 'a' => 3, 'c' => 7];
echo '原数组: ';
print_r($arr);
br();

// 3. asort() 根据值升序, 键保留
asort($arr);
echo 'asort(): ';
print_r($arr);
br();

// 4. arsort() 根据值降序, 键保留
arsort($arr);
echo 'arsort(): ';
print_r($arr);
br();

// 5. ksort() 根据键升序
ksort($arr);
echo 'ksort(): ';
print_r($arr);
br();

// 6. krsort() 根据键降序
krsort($arr);
echo 'krsort(): ';
print_r($arr);
hr();

$arr2 = ['img12', 'img2', 'img11', 'img1', 'iMg3'];
echo '原数组: ';
print_r($arr2);
br();

asort($arr2);
echo 'asort(): ';
print_r($arr2);
br();

// 7. natsort() 自然排序, 与人们通常对字母数字字符串进行排序的方法相同的排序
natsort($arr2);
echo 'natsort(): ';
print_r($arr2);
br();

// 8. natcasesort() 自然排序, 忽略大小写
natcasesort($arr2);
echo 'natcasesort(): ';
print_r($arr2);
hr();

$arr3 = [1, 2, 3, 4, 5, 6];
echo '原数组: ';
print_r($arr3);
br();

// 9. shuffle() 随机排序, 不保留键名
shuffle($arr3);
echo 'shuffle(): ';
print_r($arr3);
br();
shuffle($arr3);
echo 'shuffle(): ';
print_r($arr3);
hr();

// 10. usort() 自定义排序, 根据值升序, 键不保留
// 10. uasort() 自定义排序, 根据值升序
// 10. uksort() 自定义排序, 根据键升序

// 11. array_multisort() 对多个或多维数组排序
//       SORT_ASC 升序 SORT_DESC 降序
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [5, 4, 3, 2, 1];
echo '$arr1: ';
print_r($arr1);
br();
echo '$arr2: ';
print_r($arr2);
br();
array_multisort($arr1, SORT_DESC, $arr2, SORT_ASC);
print_r($arr1);
br();
print_r($arr2);
hr();
$arr = [
    ['name'=>'peter','age'=>27],
    ['name'=>'mike','age'=>17],
    ['name'=>'tom','age'=>32],
    ['name'=>'jack','age'=>25],
];
echo '多维数组: ';
print_r($arr);