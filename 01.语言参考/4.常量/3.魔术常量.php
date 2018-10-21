<?php
// 八个魔术常量它们的值随着它们在代码中的位置改变而改变
// __LINE__      文件中的当前行号
// __FILE__      文件的完整路径和文件名
// __DIR__       文件所在的目录
// __FUNCTION__  函数名称
// __CLASS__     类的名称
// __TRAIT__     Trait 的名字
// __METHOD__    类的方法名
// __NAMESPACE__ 当前命名空间的名称

namespace test;

echo '__LINE__: ' . __LINE__ . '<br/>';
echo '__FILE__: ' . __FILE__ . '<br/>';
echo '__DIR__: ' . __DIR__ . '<br/>';

function a() {
    echo '__FUNCTION__: ' . __FUNCTION__ . '<br/>';
}

a();


class b {
    function bb() {
        echo '__CLASS__: ' . __CLASS__ . '<br/>';
        echo '__METHOD__: ' . __METHOD__ . '<br/>';
    }
}

$b = new b();
$b->bb();

echo '__namespace__: ' . __namespace__ . '<br/>';
