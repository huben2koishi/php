<?php
echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'hello-world');
echo "<hr/>";

$greet = function ($name) {
    printf("Hello %s<br/>", $name);
};

$greet('World');
$greet('PHP');
echo "<hr/>";

// 从父作用域继承变量
$message = 'hello';
$fun1 = function () use ($message) {
    var_dump($message);
};
$fun1();
$message = 'world';
$fun1();

$message = 'hello';
$fun2 = function () use (&$message) {
    var_dump($message);
};
$fun2();
$message = 'world';
$fun2();
echo "<hr/>";

// closures 和作用域
class Cart {
    const PRICE_BUTTER = 1.00;
    const PRICE_MILK = 3.00;
    const PRICE_EGGS = 6.95;
    
    protected $products = array();
    
    public function add($product, $quantity) {
        $this->products[$product] = $quantity;
    }
    
    public function getQuantity($product) {
        return isset($this->products[$product]) ? $this->products[$product] : FALSE;
    }
    
    public function getTotal($tax) {
        $total = 0.00;
        $callback = function ($quantity, $product) use ($tax, &$total) {
            $pricePerItem = constant(__CLASS__ . "::PRICE_" . strtoupper($product));
            $total += ($pricePerItem * $quantity) * ($tax + 1.0);
        };
        array_walk($this->products, $callback);
        return round($total, 2);
    }
}

$my_cart = new Cart();
$my_cart->add('butter', 1);
$my_cart->add('milk', 3);
$my_cart->add('eggs', 6);

echo $my_cart->getTotal(0.05);
echo "<hr/>";

//
class Test {
    public function testing() {
        return function () {
            var_dump($this);
        };
    }
}

$obj = new Test();
$fun = $obj->testing();
$fun();
echo "<hr/>";

// 静态匿名函数中使用 $this
class foo{
    function __construct() {
        $fun = static function(){
            var_dump($this);
        };
        $fun();
    }
}
new foo();