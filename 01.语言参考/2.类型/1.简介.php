<?php
/**
 * 数据类型
 *   标量类型: 布尔(boolean), 整型(integer), 浮点型(float/double), 字符串(string)
 *   复合类型: 数组(array), 对象(object), 可调用(callable)
 *   特殊类型: 资源(resource), 空(null)
 */

// 查看一个变量的值和类型, 可使用 var_dump()
$test = 'hello';
var_dump($test);

echo "<br/>";

// 只获取类型, 可使用 gettype()
echo gettype($test)."<br/>";

// 检验某个类型, 可使用 is_type()
echo is_string($test);