<?php
// 生成器函数类似普通的函数, 不同的是普通函数返回一个值, 生成器函数可以 yield 生成许多值
function xRange($start, $limit, $step = 1) {
    if ($start < $limit) {
        if ($step <= 0) {
            throw new LogicException('必须为正数');
        }
        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    } else {
        if ($step >= 0) {
            throw new LogicException('必须为负数');
        }
        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    }
}

foreach (range(1,9,2) as $item) {
    echo "$item ";
}

echo '<br/>';

foreach (xRange(1,9,2) as $item) {
    echo "$item ";
}