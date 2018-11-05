<?php
spl_autoload_register(function ($name){
   var_dump($name);
   include_once $name.'.php';
});

class Foo implements IInterface{

}