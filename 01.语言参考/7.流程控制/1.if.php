<?php
$a = 10;
$b = 5;

// if 语句
if ($a > $b) {
    echo 'a > b';
}
echo '<hr/>';

// if-else 语句
if ($a == $b) {
    echo 'a = b';
} else {
    echo 'a != b';
}
echo '<hr/>';

// if-elseif-else 语句
if ($a < $b) {
    echo 'a < b';
} elseif ($a == $b) {
    echo 'a = b';
} else {
    echo 'a >b';
}