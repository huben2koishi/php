<?php
// for 语句
for ($i = 0; $i < 10; $i++) {
    echo ($i + 1) . '<br/>';
}
echo '<hr/>';

for ($i = 0; $i < 10; $i++):
    echo ($i + 1) . '<br/>';
endfor;
echo '<hr/>';

// foreach 语句
$arr = array(1,2,3,4);
foreach ($arr as &$item) {
    $item *= 2;
}
var_dump($arr);
