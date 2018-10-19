<?php
/**
 * array (
 *     key => value,
 *     ...
 * )
 * key 可为 int 或 string
 * value 可以是任意类型
 *
 */
$array1 = array(
    "a1" => '1',
    "b1" => '2',
);
$array2 = [
    "a2" => '3',
    "b2" => '4',
];

// key 的转换
//     浮点型, 布尔值转换为整型
//     包含有合法整型值的字符串转换为整型
//     null转换为 ""
$array3 = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
);
var_dump($array3);
echo "<hr/>";

$array4 = array(
    "a" => 'a1',
    "b" => 'b1',
    100 => -100,
    -100 => 100,
);
var_dump($array4);
echo "<hr/>";

// 访问数组元素
$array5 = array(
    "a" => "str",
    42 => 24,
    "multi" => array(
        "aa" => array(
            "bb" => "string",
        )
    )
);
var_dump($array5["a"]);
echo "<br/>";
var_dump($array5["42"]);
echo "<br/>";
var_dump($array5["multi"]["aa"]["bb"]);
echo "<hr/>";

// 数组解引用
function getArray()
{
    return array(1, 2, 3);
}

$second_element = getArray()[1];
echo $second_element;

// 修改 array
$array6 = array(
    1 => 1,
    5 => 2,
);
$array6[] = 56; // 等效于 $array[6] = 56
$array6["x"] = "a";
unset($array6[6]); // 删除某个数组元素
unset($array6); // 删除整个数组

// 转换为数组
//     整型, 浮点型, 字符串, 布尔值, 资源类型转换我数组, 等价于 array($value)
//     对象类型转换为数组, 键名为变量名, 值为变量值