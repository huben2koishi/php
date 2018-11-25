<?php
namespace foo;
// 导入类
use My\Full\Classname as Another;
use My\Full\NSname;

use ArrayObject;

// 导入方法
use function My\Full\functionName;
use function My\Full\functionName as func;

// 导入常量
use const My\Full\CONSTANT;

$obj = new namespace\Another; // 初始化 foo\Another 对象
$obj = new Another; // 初始化 My\Full\Classname 对象

NSname\subns\func(); // 调用 My\Full\NSname\subns\func() 函数
$a = new ArrayObject(array(1)); // 实例化 ArrayObject 对象
func(); // 调用 My\Full\functionName() 方法
echo CONSTANT; // My\Full\CONSTANT;

// 导入多个
use My\Full\Classname2 as Another2, My\Full\NSname2;
