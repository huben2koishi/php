<?php
$a = 0b11;
$b = 0b01;
echo $a & $b;   // 与
echo $a | $b;   // 或
echo $a ^ $b;   // 异或
echo ~$a;       // 非
echo $a << $b;  // 左移
echo $a >> $b;  // 右移

$format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)' . ' %3$s (%4$2d = %4$04b)' . "\n";

echo <<<EOH
 ---------     ---------  -- ---------
 result        value      op test
 ---------     ---------  -- ---------
EOH;


$values = array(0, 1, 2, 4, 8);
$test = 1 + 4;

echo "<br/> Bitwise AND <br/>";
foreach ($values as $value) {
    $result = $value & $test;
    printf($format, $result, $value, '&', $test);
    echo "<br/>";
}

echo "<br/> Bitwise Inclusive OR <br/>";
foreach ($values as $value) {
    $result = $value | $test;
    printf($format, $result, $value, '|', $test);
    echo "<br/>";
}

echo "<br/> Bitwise Exclusive OR (XOR) <br/>";
foreach ($values as $value) {
    $result = $value ^ $test;
    printf($format, $result, $value, '^', $test);
    echo "<br/>";
}