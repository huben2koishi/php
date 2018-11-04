<?php

// 属性声明, 初始化的值必须为常数, 在 php 编译时就可得到的值
class SimpleClass {
    
    // 错误的属性声明
    public $var1 = 'hello' . 'world';
    // 当包含变量时, heredoc 不能用于初始化属性
    public $var2 = <<<EOD
hello world $v1
EOD;
    public $var3 = 1 + 2;
    public $var4 = self::myStaticMethod();
    public $var5 = $myVar;
    
    // 正确的属性声明
    public $var6 = myConstant;
    public $var7 = array(true, false);
    public $var8 = <<<'EOD'
hello world
EOD;
    
    public $v1 =1;
    private function myStaticMethod() {
    
    }
}

$class1 = new SimpleClass();
echo $class1->var8;