<?php

namespace A\B\C{
    class Exception extends \Exception {
    }
    
    $a = new Exception('hi');
    $b = new \Exception('hi');
}

namespace A\B\D{
    const E_ERROR = 45;
    
    function strlen($str){
        return \strlen($str)-1;
    }
    
    echo E_ERROR.'<br/>';
    echo INI_ALL.'<br/>';
    
    echo strlen('hi').'<br/>';
    
    if (is_array('hi')){
        echo 'is array<br/>';
    } else {
        echo 'is not array<br/>';
    }
    
}