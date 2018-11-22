<?php
// 受命名空间影响的代码 类 traits 接口 函数 常量
namespace MyProject;

const CONNECT_OK = 1;
class Connection {
}

function connect() {
}

// namespace 的声明语句必须在所有代码之前(除了定义源文件编码方式的declare语句)

// 命名空间允许像目录一样嵌套
namespace MyProject\Sub\Level;

const CONNECT_OK = 1;
class Connection {
}

function connect() {
}
