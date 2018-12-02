<?php
class mErrorException{
    protected $severity;  // int 异常级别

    public function __construct(string $message = "",
                                int $code = 0,
                                int $severity = E_ERROR,
                                string $filename = __FILE__,
                                int $lineno = __LINE__,
                                Exception $previous = null) {
        // 异常的构造函数
    }

    // 继承自父类 Exception 的方法
    final public function getMessage() {
        return "string 获取异常消息内容";
    }

    final public function getPrevious() {
        return "Throwable 返回异常链中的前一个异常";
    }

    final public function getCode() {
        return "int 获取异常代码";
    }

    final public function getFile() {
        return "string 创建异常时的程序文件名称";
    }

    final public function getLine() {
        return "int 获取创建的异常所在文件中的行号";
    }

    final public function getTrace() {
        return "array 获取异常追踪信息";
    }

    final public function getTraceAsString() {
        return "string 获取字符串类型的异常追踪信息";
    }

    final public function __toString() {
        return "String 将异常对象转换为字符串";
    }

    public function __clone() {
        return "异常克隆";
    }
}