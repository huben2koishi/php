<?php

// Serializable  序列化接口
class mSerializable implements Serializable {
    public function serialize() {
        return "string 对象的字符串表示";
    }

    public function unserialize(/*string*/
        $serialized) {
        return "mixed 构造对象";
    }
}

class Obj implements Serializable {
    private $data;
    public function __construct() {
        $this->data = "My private data";
    }
    public function serialize() {
        return serialize($this->data);
    }

    public function unserialize($serialized) {
        $this->data = unserialize($serialized);
    }

    public function getData(): string {
        return $this->data;
    }
}

$obj = new Obj();
$ser = serialize($obj);
echo $ser.'<br/>';

$newObj = unserialize($ser);
var_dump($newObj->getData());
