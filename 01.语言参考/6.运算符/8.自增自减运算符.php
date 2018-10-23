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

echo '<br/>'.'== Alphabets ==' . '<br/>';
$s = 'W';
for ($n=0; $n<6; $n++) {
    echo ++$s . '<br/>';
}
// Digit characters behave differently
echo '== Digits ==' . '<br/>';
$d = 'A8';
for ($n=0; $n<6; $n++) {
    echo ++$d . '<br/>';
}
$d = 'A08';
for ($n=0; $n<6; $n++) {
    echo ++$d . '<br/>';
}