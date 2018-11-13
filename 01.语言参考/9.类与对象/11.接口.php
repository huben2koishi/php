<?php

// 接口定义的方法必须为 public, 实现接口的类必须实现接口定义的所有方法
interface iTemplate {
    public function setVariable($name, $var);

    public function getHtml($template);
}

class Template implements iTemplate {
    public $vars = array();

    public function setVariable($name, $var) {
        $this->vars[$name] = $var;
    }

    public function getHtml($template) {
        foreach ($this->vars as $name => $var) {
            $template = str_replace('{' . $name . '}', $var, $template);
        }
        return $template;
    }
}

// 接口可继承另一个接口
interface a {
    public function foo();
}

interface b extends a {
    public function bar($value);
}

class c implements b {
    public function foo() {
    }

    public function bar($value) {
    }
}

// 类可继承多个接口
interface d {
    public function baz();
}

class e implements a, d {
    public function foo() {
    }

    public function baz() {
    }
}