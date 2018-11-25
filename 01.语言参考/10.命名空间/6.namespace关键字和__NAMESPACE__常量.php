<?php
namespace MyProject;


// __NAMESPACE__ 的值为当前命名空间名称的字符串
echo __NAMESPACE__;

function get($className){
    $a = __NAMESPACE__ .'\\'.$className;
    return new $a();
}

use blah\blah as mine;
blah\mine();
// namespace 操作符 相当于类中的 self
//namespace\blah\mine();
