<?php

// __sleep() __wakeup()
class Connection {
    protected $link;
    private $server, $user, $password, $database;
    
    public function __construct($server, $user, $password, $database) {
        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->connect();
    }
    
    private function connect() {
        $this->link = mysqli_connect($this->server, $this->user, $this->password, $this->database);
    }
    
    public function __sleep() {
        return array('localhost', 'root', '123456', 'data');
    }
    
    public function __wakeup() {
        $this->connect();
    }
}

//__construct() __destruct()
// __call() __callStatic()
// __get() __set()
// __isset() __unset()

// __toString()
class TestClass {
    public $foo;
    
    public function __construct($foo) {
        $this->foo = $foo;
    }
    
    public function __toString() {
        return "toString(): $this->foo";
    }
}

$class = new TestClass('Hello');
echo $class;

echo '<hr/>';

// __invoke() 当尝试以调用函数的方式调用一个对象时, __invoke()会被调用
class CallableClass {
    public function __invoke($x) {
        var_dump($x);
    }
}

$obj = new CallableClass();
$obj(5);
var_dump(is_callable($obj));

echo '<hr/>';

// __set_state() 调用var_export()时, 此静态方法被调用
class A {
    public $var1, $var2;
    
    public static function __set_state($an_array) {
        $obj = new A();
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];
        return $obj;
    }
}

$a = new A();
$a->var1 = 5;
$a->var2 = 'foo';
eval('$b = ' . var_export($a, true) . ';');
var_dump($b);

echo '<hr/>';

// __clone()

// __debugInfo()
class C {
    private $prop;
    
    public function __construct($val) {
        $this->prop = $val;
    }
    
    public function __debugInfo() {
        return [
            'propSquared' => $this->prop ** 2,
        ];
    }
}

var_dump(new C(42));