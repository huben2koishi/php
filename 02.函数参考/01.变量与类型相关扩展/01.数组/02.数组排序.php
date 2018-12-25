<?php
include "../hh.php";

$arr = ['d'=>5,'b'=>1,'a'=>3,'c'=>7];
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

$arr = ['d'=>5,'b'=>1,'a'=>3,'c'=>7];
echo '原数组: ';
print_r($arr);
br();

// 3. asort() 根据值升序
asort($arr);
echo 'asort(): ';
print_r($arr);
br();

// 4. arsort() 根据值降序
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

$arr2 = ['img12','img2','img11','img1','iMg3'];
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

$arr3 = [1,2,3,4,5,6];
echo '原数组: ';
print_r($arr3);
br();

// 9. shuffle() 随机排序
shuffle($arr3);
echo 'shuffle(): ';
print_r($arr3);
br();
shuffle($arr3);
echo 'shuffle(): ';
print_r($arr3);
br();

// 10. usort() 自定义排序, 根据值升序, 键不保留
// 10. uasort() 自定义排序, 根据值升序
// 10. uksort() 自定义排序, 根据键升序