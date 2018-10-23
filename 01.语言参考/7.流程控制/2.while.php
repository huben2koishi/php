<?php
// while 语句
$a = 1;
while ($a < 11) {
    echo $a++;
}
echo '<hr/>';

$b = 1;
while ($b < 11) :
    echo $b;
    $b++;
endwhile;
echo '<hr/>';

// do-while 语句
$c = 0;
do {
    echo $c;
} while ($c > 0);
echo '<hr/>';

$d = 0;
do {
    if ($d < 5) {
        echo 'd is not big enough';
        break;
    }
    $d *= $factor;
    if ($d < $minium_limit) {
        break;
    }
    echo 'd is ok';
} while (0);