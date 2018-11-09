<?php
class foo{
    public function printItem($string) {
        echo "Foo: $string<br/>";
    }

    public function printPHP() {
        echo "PHP 天下第一！<br/>";
    }
}

class bar extends foo {
    public function printItem($string) {
        echo "Bar: $string<br/>";
    }
}

$foo = new foo();
$bar = new bar();

$foo->printItem('baz');
$foo->printPHP();
$bar->printItem('baz');
$bar->printPHP();