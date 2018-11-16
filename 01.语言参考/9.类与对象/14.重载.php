<?php
// 动态地 "创建" 类属性和方法

// 属性重载
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

         "getting $name<br/>";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        $trace = debug_backtrace();
        trigger_error('Undefined property via __get() ' . $name . ' in ' . $trace[0]['file'] . ' on line ' . $trace[0]['line'], E_USER_NOTICE);
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

    public function getHidden(): int {
        return $this->hidden;
    }
}

echo '<pre>';
$obj = new PropertyTest();
$obj->a = 1;
echo "\$obj->a.<br/>";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo '<br/>';

echo $obj->declared . '<br/>';

echo $obj->getHidden() . '<br/>';
echo $obj->hidden;

// 方法重载
// mixed __call(String $name, array $arguments) 在对象中调用不可访问方法时调用
// static mixed __callStatic(String $name, array $arguments) 在静态上下文中调用不可访问方法时调用
class MethodTest{
    public function __call($name, $arguments) {
        echo "Calling object method '$name' " . implode(', ', $arguments). "<br/>";
    }

    public static function __callStatic($name, $arguments) {
        echo "Calling static method '$name' " . implode(', ', $arguments). "<br/>";
    }
}

$obj = new MethodTest();
$obj->runTest('in object context');

MethodTest::runTest('in static context');