<?php

class a_class {

}

interface my_interface {

}

class my_class {

}

class ei_class extends my_class implements my_interface {

}

$a = new my_class();

var_dump($a instanceof my_class);
var_dump($a instanceof a_class);

$b = new ei_class();
var_dump($b instanceof my_class);
var_dump($b instanceof my_interface);