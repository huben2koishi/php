<?php
$a = 5;
echo $a++;  // 后加
echo $a;

$b = 5;
echo ++$b;  // 前加
echo $b;

$c = 5;
echo $c--;  // 后减
echo $c;

$d = 5;
echo --$d;  // 前减
echo $d;

echo '== Alphabets ==' . PHP_EOL;
$s = 'W';
for ($n=0; $n<6; $n++) {
    echo ++$s . PHP_EOL;
}
// Digit characters behave differently
echo '== Digits ==' . PHP_EOL;
$d = 'A8';
for ($n=0; $n<6; $n++) {
    echo ++$d . PHP_EOL;
}
$d = 'A08';
for ($n=0; $n<6; $n++) {
    echo ++$d . PHP_EOL;
}