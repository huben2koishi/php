<?php
$a = 'hello';
$$a = 'world';
echo "$a ${$a}" . "<br/>";

class foo {
    var $bar = "I am bar.";
    var $arr = array("I am A.", "I am B.", "I am C.");
    var $r = "I'm r.";
}

$fo = new foo();
$bar = "bar";
$baz = array('foo', 'bar', 'baz', 'quu');
echo $fo->$bar . "<br/>";
echo $fo->{$baz[1]} . "<br/>";

$start = 'b';
$end = 'ar';
echo $fo->{$start . $end} . "<br/>";

$arr = 'arr';
echo $fo->{$arr[1]} . "<br/>";
echo $fo->{$arr}[1] . "<br/>";