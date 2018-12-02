<?php
// Generator
class Generator implements Iterator{
    public function current() {
        // 返回当前产生的值
    }
    public function key() {
        // 返回当前产生的键
    }
    public function next() {
        // 生成器继续执行
    }
    public function rewind() {
        // 重置迭代器
    }

    public function send() {
        // 向生成器中传入一个值
    }

    public function throw() {
        // 向生成器中抛入一个异常
    }
    public function valid() {
        // 检查迭代器是否被关闭
    }
    public function __wakeup() {
        // 序列化回调
    }
}