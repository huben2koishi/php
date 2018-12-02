<?php
// IteratorAggregate  聚合式迭代器接口
class mIteratorAggregate implements IteratorAggregate{
    public function getIterator() {
        return new ArrayIterator($this);
    }
}