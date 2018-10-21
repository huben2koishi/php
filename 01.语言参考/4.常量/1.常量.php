<?php
// 合法的常量名由字母下滑线开头, 后跟任意数量的数字字母下划线
// 正则表达式: ^\$[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$

// 合法的常量名
define("FOO", "something");
define("FOO2", "something else");
define("FOO_BAR", "something more");

// 非法的常量名
define("2FOO", "something");

// 下面的定义是合法的，但应该避免这样做：(自定义常量不要以__开头)
// 也许将来有一天PHP会定义一个__FOO__的魔术常量
// 这样就会与你的代码相冲突
define("__FOO__", "something");