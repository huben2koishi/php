<?php
echo 'this is a simple string'.'<br/>';

// 定义一个字符串的最简单的方法是用单引号把它包围起来（字符 '）。

// 可以录入多行
echo 'You can also have embedded newlines in 
strings this way as it is
okay to do'.'<br/>';

// 单引号中的字符串, 转义符只识别 \\ 和 \' , 不会识别变量名

echo 'Arnold once said: "I\'ll be back"'.'<br/>';
echo 'You deleted C:\\*.*?'.'<br/>';
echo 'You deleted C:\*.*?'.'<br/>';
echo 'This will not expand: \n a newline'.'<br/>';
echo 'Variables do not $expand $either'.'<br/>';

// 如果字符串是包围在双引号("")中， PHP 将对以下特殊的字符进行解析
// \n \r \t \v \e \f \\ \$ \" \[0-7]{1,3} \x[0-9a-fA-F]{1,2}
// 双引号中的变量名将会被解析
$a = 123;
echo "value a = $a\n";
echo "\thello";

// heredoc 结构, 类似于双引号字符串
$str = <<< EOD
这是一个 heredoc 结构的字符串, 
单引号不用被转义，但是上文中列出的转义序列还可以使用, 
变量将被替换
EOD;

class foo {
    var $a, $b;
    function f(){
        $this->a = 'foo';
        $this->b = array('bar1','bar2','bar3');
    }
}
$fo = new foo();
$name = 'my_name';

echo <<<EOT
My name is "$name", I'm printing some $fo->a,
Now, I'm printing some {$fo->b},
This should print a capital 'A': \x41
EOT;

// nowdoc 结构, 类似于单引号字符串
$str = <<< 'EOD'
这是一个 nowdoc 结构的字符串, 
不进行转义操作, 
变量将不会被替换
EOD;

class foo2 {
    var $a, $b;
    function f(){
        $this->a = 'foo';
        $this->b = array('bar1','bar2','bar3');
    }
}
$fo = new foo2();
$name = 'my_name';

echo <<<'EOT'
My name is "$name", I am printing some $fo->a,
Now, I am printing some {$fo->b},
This should print a capital 'A': \x41
EOT;

// 变量解析
// 1. 简单规则, 当遇到一个 $ 符号,
//    php 解析器会组合尽量多的标识以形成一个合法的变量名
//    array 索引和对象属性也可被解析
$juice = "apple";
echo "<br/>He drank some $juice juice.".PHP_EOL;
echo @"<br/>He drank some juice made of $juices.";

$fruits = array('apple','banana','orange');
class people{public $name = 'John';}
$man = new people();
echo "<br/>$man->name want to drink $fruits[2] juice.";
// 2. 复杂语法
$great = 'fantastic';
echo "<br/>This is { $great}";
echo "<br/>This is {$great} ${great}";

// strlen() 获取字符串长度
echo "<br/>".strlen('string')."<br/>";

$str = 'abc';
var_dump($str[1]); echo "<br/>";
var_dump(isset($str[1])); echo "<br/>";
var_dump($str[1.0]); echo "<br/>";
var_dump(isset($str[1.0])); echo "<br/>";
var_dump($str['x']); echo "<br/>";
var_dump(isset($str['x'])); echo "<br/>";
var_dump($str['1x']); echo "<br/>";
var_dump(isset($str['1x'])); echo "<br/>";

// 转换为字符串
//     布尔值的 true 转换为 "1", false 转换为 ""
//     整型和浮点型转换为数字的字面样式的 string
//     数组转化为 "array"
//     对象转化为 "object"
//     资源转化为 "Resource id #1" 结构的字符串
//     null 转化为空字符串

