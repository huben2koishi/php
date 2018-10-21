<?php
// 在PHP 5.3.0后, 常量可以用 const 关键字定义
// 用 constant() 来获取常量的值
// 用 get_defined_constants() 可以获得所有已定义的常量列表

// var_dump(get_defined_constants());

define('CON1','Hello');
echo CON1;
// echo con1;

const CON2 = 'world';
echo CON2;