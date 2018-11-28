<?php
// 一个 php 文件中允许定义多个命名空间

namespace MyProject {
    const CONNECT_OK = 1;

    class Connection {
        static function start() {
            return 1;
        }
    }

    function connect() {
        return 1;
    }
}


namespace AnotherProject {
    const CONNECT_OK = 1;
    class Connection {
    }

    function connect() {
    }
}

// 全局代码
namespace {
    session_start();
    $a = MyProject\connect();
    echo MyProject\Connection::start();
}

