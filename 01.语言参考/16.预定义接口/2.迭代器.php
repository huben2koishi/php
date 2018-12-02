<?php
// Iterator  迭代器接口

class mIterator implements Iterator {
    public function current() {
        return "mixed 返回当前元素";
    }

    public function key() {
        return "scalar 返回当前元素键值";
    }

    public function next() {
        return "next 向前移动到下一个元素";
    }

    public function rewind() {
        return "rewind 返回到迭代器的第一个元素";
    }

    public  function valid() {
        return "valid 检测当前位置是否有效";
    }
}