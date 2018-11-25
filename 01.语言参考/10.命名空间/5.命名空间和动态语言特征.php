<?php

namespace {
    // 动态访问元素
    class className {
        public function __construct() {
            echo __METHOD__ . '<br/>';
        }
    }
    
    function functionName() {
        echo __FUNCTION__ . '<br/>';
        
    }
    const CONST_NAME = "global";
    
    $a = 'className';
    $obj = new $a;
    $b = 'functionName';
    $b();
    echo constant('CONST_NAME') . '<br/>';
}

// 动态访问命名空间中的元素
namespace namespaceName {
    class className {
        public function __construct() {
            echo __METHOD__ . '<br/>';
        }
    }
    
    function functionName() {
        echo __FUNCTION__ . '<br/>';
        
    }
    const CONST_NAME = "namespaced";
    
    // 默认为全局变量
    $a = 'className';
    $obj = new $a;
    $b = 'functionName';
    $b();
    echo constant('CONST_NAME') . '<br/>';
    
    $a = '\namespaceName\className';
    $obj = new $a; // 解析为 namespaceName\className::__construct
    $a = 'namespaceName\classname';
    $obj = new $a; // 解析为 namespaceName\className::__construct
    $b = 'namespaceName\functionName';
    $b(); // 解析为 namespaceName\functionName
    $b = '\namespaceName\functionName';
    $b(); // 解析为 namespaceName\functionName
    echo constant('\namespaceName\CONST_NAME'), "<br/>"; // 解析为 namespaced
    echo constant('namespaceName\CONST_NAME'), "<br/>"; // 解析为 namespaced
}