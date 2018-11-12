<?php
// 动态地 "创建" 类属性和方法
// void __set(String $name, mixed $value) 为不可访问属性赋值
// mixed __get(String $name) 读取不可访问属性
// bool __isset(String $name) 对不可访问属性调用 isset() empty() 时调用
// void __unset(String $name) 对不可访问属性调用 unset()时调用
class PropertyTest {
    private $data = array();
    public $declared = 1;

    private $hidden = 2;

    public function __set($name, $value) {
        echo "set $name to $value<br/>";
        $this->data[$name] = $value;
    }
    public function __get($name) {
        echo "getting $name<br/>";
        if (array_key_exists($name,$this->data)){
            return $this->data[$name];
        }
        $trace = debug_backtrace();
        trigger_error('Undefined property via __get() '.$name.' in '.$trace[0]['file'].' on line '.$trace[0]['line'],E_USER_NOTICE);
        return null;
    }
    public function __isset($name) {
        echo "Is $name set?<br/>";
        return isset($this->data[$name]);
    }
    public function __unset($name) {
        echo "Unset $name<br/>";
        unset($this->data[$name]);
    }
}
echo '<pre>';
$obj = new PropertyTest();
$obj->a = 1;
echo "\$obj->a.<br/>";