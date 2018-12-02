<?php

// ArrayAccess 数组式访问接口
class mArrayAccess implements ArrayAccess {
    public function offsetExists($offset) {
        // 检查一个偏移位置是否存在
    }

    public function offsetGet($offset) {
        // 获取一个偏移位置的值
    }

    public function offsetSet($offset, $value) {
        // 设置一个偏移位置的值
    }

    public function offsetUnset($offset) {
        // 复位一个偏移位置的值
    }
}

class Obj implements ArrayAccess {
    private $container = array();

    public function __construct() {
        $this->container = array("one" => 1, "two" => 2, "three" => 3);
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetGet($offset) {
        return $this->container[$offset] ? $this->container[$offset] : null;
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

}

echo '<pre>';
$obj = new Obj();

var_dump(isset($obj["two"]));
var_dump($obj["two"]);
unset($obj["two"]);
var_dump(isset($obj["two"]));
$obj["two"] = "A value";
var_dump($obj["two"]);
$obj[] = 'Append 1';
$obj[] = 'Append 2';
$obj[] = 'Append 3';
print_r($obj);