<?php
// Closure  闭包, 用于代表 匿名函数 的类
class mClosure{
    public function __construct() {
        // 用于禁止实例化的构造函数
    }

    public static function /*Closure*/ bind(Closure $closure, object $newThis, $newScope = 'static') {
        // 复制一个闭包，绑定指定的$this对象和类作用域
    }
    public static function /*Closure*/ bindTo(object $newThis, $newScope = 'static') {
        // 复制当前闭包对象，绑定指定的$this对象和类作用域
    }
}