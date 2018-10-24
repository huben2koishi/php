<?php
// declare 结构用于设定一段代码的执行指令

// Tick 指令 每当执行 n 条低级语句时调用
declare(ticks=1);

function tick_handler() {
    echo "tick_handle() called.<br/>";
}

register_tick_function('tick_handler');

$a = 1;
if ($a > 0) {
    $a += 2;
    echo "$a<br/>";
}

// encoding 指定每段脚本的编码方式
declare(encoding='IS0-8859-2');