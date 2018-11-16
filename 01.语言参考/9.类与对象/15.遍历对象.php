<?php

// foreach 遍历所有其能访问的可见元素
class MyClass {
    public $var1 = 'value1';
    public $var2 = 'value2';
    public $var3 = 'value3';

    protected $protected = 'protected var';
    private $private = 'private var';

    function iterateVisible() {
        echo "MyClass::iterateVisible:<br/>";
        foreach ($this as $key => $value) {
            echo "$key => $value<br/>";
        }
    }
}

$class = new MyClass();

foreach ($class as $key => $value) {
    echo "$key => $value<br/>";
}

echo '<hr/>';

$class->iterateVisible();

echo '<hr/>';

// 实现 iterator 接口的对象遍历
class MyIterator implements Iterator {
    private $var = array();

    public function __construct($value) {
        if (is_array($value)) {
            $this->var = $value;
        }
    }

    public function current() {
        $var = current($this->var);
        echo "current: $var<br/>";
        return $var;
    }

    public function next() {
        $var = next($this->var);
        echo "next: $var<br/>";
        return $var;
    }

    public function key() {
        $var = key($this->var);
        echo "key: $var<br/>";
        return $var;
    }

    public function valid() {
        $var = current($this->var) != false;
        echo "valid: {$var}<br/>";
        return $var;
    }

    public function rewind() {
        echo "rewinding<br/>";
    }
}

$value = array('a', 'b', 'c');
$it = new MyIterator($value);

foreach ($it as $key => $value) {
    echo "$key => $value<br/>";
}

echo '<hr/>';

// 实现 IteratorAggregate 接口的对象遍历

class MyCollection implements IteratorAggregate {
    public $items = array();

    private $count = 0;

    public function getIterator() {
        return new MyIterator($this->items);
    }

    public function add($value) {
        $this->items[$this->count++] = $value;
    }
}

$coll = new MyCollection();
$coll->add('value1');
$coll->add('value2');
$coll->add('value3');

foreach ($coll as $key=>$value) {
    echo "key/value: [$key => $value]<br/>";
}