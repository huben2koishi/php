<?php
// yield 返回一个值, 并暂停生成器函数
function get_1_to_5(){
    for ($i=1;$i<=5;$i++){
        yield $i;
    }
}

$a=get_1_to_5();
foreach ($a as $item) {
    echo "$item ";
}

echo '<hr/>';

// 生成器在生成值的时候可以指定键名
$input = <<<'EOF'
1;PHP;Likes dollar signs
2;Python;Likes whitespace
3;Ruby;Links blocks
EOF;

function input_parser($input){
    foreach (explode("\n",$input) as $line) {
        $fields = explode(';',$line);
        $id = array_shift($fields);

        yield $id => $fields;
    }
}

foreach (input_parser($input) as $id => $fields) {
    echo "$id:<br/>$fields[0] $fields[1]<br/>";
}

// yield from 可以生成来自数组, 方法中的 yield 值
function yieldFrom(){
    yield from [1,2];
    yield from threeNum();
}
function threeNum(){
    yield 3;
}