<?php

include "23.对象序列化1.php";

$s = file_get_contents('store');
$a = unserialize($s);

$a->show_one();