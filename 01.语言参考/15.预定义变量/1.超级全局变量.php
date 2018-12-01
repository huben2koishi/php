<?php
// 超全局变量是在全部作用域中始终可用的内置变量

// $GLOBALS 引用全局作用域中可用的全部变量
// 是一个包含全部变量的全局组合数组, 变量的名字就是数组的键
function test() {
    $foo = "local variable";
    echo '$foo in global scope: ' . $GLOBALS['foo'] . '<br/>';
    echo '$foo in current scope: ' . $foo . '<br/>';
}

$foo = "Example content";
test();

// $_SERVER 服务器和执行环境信息
// 是一个包含头信息(header), 路径(path), 以及脚本位置(script)等信息的数组 这些信息由 web 服务器创建
// 部分 $_SERVER 元素
// 'PHP_SELF'               当前执行的脚本文件名
// 'argv'                   传递给该脚本的参数的数组
// 'argc'                   包含命令行模式下传递给该脚本的参数的数目
// 'GATEWAY_INTERFACE'      服务器使用的 CGI 规范的版本
// 'SERVER_ADDR'            当前运行脚本所在的服务器的 IP 地址
// 'SERVER_NAME'            当前运行脚本所在的服务器的主机名
// 'SERVER_SOFTWARE'        服务器标识字符串
// 'SERVER_PROTOCOL'        请求页面时通信协议的名称和版本
// 'SERVER_METHOD'          访问页面使用的请求方法
// 'REQUEST_TIME'           请求开始时的时间戳
// 'REQUEST_TIME_FLOAT      请求开始时的时间戳, 微秒级别的精准度
// 'QUERY_STRING'           'query string（查询字符串）
// 'DOCUMENT_ROOT'          当前运行脚本所在的文档根目录
// 'HTTP_ACCEPT'            当前请求头中 Accept: 项的内容
// 'HTTP_ACCEPT_CHARSET'    当前请求头中 Accept-Charset: 项的内容
// 'HTTP_ACCEPT_ENCODING'   当前请求头中 Accept-Encoding: 项的内容
// 'HTTP_ACCEPT_LANGUAGE'   当前请求头中 Accept-Language: 项的内容
// 'HTTP_CONNECTION'        当前请求头中 Connection: 项的内容
// 'HTTP_HOST'              当前请求头中 Host: 项的内容
// 'HTTP_REFERER'           引导用户代理到当前页的前一页的地址
// 'HTTP_USER_AGENT'        当前请求头中 User-Agent: 项的内容
// 'HTTPS'                  如果脚本是通过 HTTPS 协议被访问, 则被设为一个非空的值
// 'REMOTE_ADDR'            浏览当前页面的用户的 IP 地址
// 'REMOTE_HOST'            浏览当前页面的用户的主机名
// 'REMOTE_PORT'            用户机器上连接到 Web 服务器所使用的端口号
// 'REMOTE_USER'            经验证的用户
// 'REDIRECT_REMOTE_USER'   验证的用户, 如果请求已在内部重定向
// 'SCRIPT_FILENAME'        当前执行脚本的绝对路径
// 'SERVER_ADMIN'           该值指明了 Apache 服务器配置文件中的 SERVER_ADMIN 参数
// 'SERVER_PORT'            Web 服务器使用的端口, 默认值为 "80"
// 'SERVER_SIGNATURE'       包含了服务器版本和虚拟主机名的字符串
// 'PATH_TRANSLATED'        当前脚本所在文件系统（非文档根目录）的基本路径
// 'SCRIPT_NAME'            包含当前脚本的路径
// 'REQUEST_URI'            URI 用来指定要访问的页面
// 'PHP_AUTH_DIGEST'        客户端发送的“Authorization” HTTP 头内容
// 'PHP_AUTH_USER'          用户输入的用户名
// 'PHP_AUTH_PW'            用户输入的密码
// 'AUTH_TYPE'              认证的类型
// 'PATH_INFO'              包含由客户端提供的、跟在真实脚本名称之后并且在查询语句（query string）之前的路径信息
// 'ORIG_PATH_INFO'         在被 PHP 处理之前, "PATH_INFO" 的原始版本
echo $_SERVER['PHP_SELF'];

// $_GET   HTTP GET 变量
// 通过 URL 参数传递给当前脚本的变量的数组
echo "Get value: " . $_GET['msg'];

// $_POET   HTTP POT 变量
// 当 HTTP POST 请求的 Content-Type 是 application/x-www-form-urlencoded 或 multipart/form-data 时, 会将变量以关联数组形式传入当前脚本
echo "Get value: " . $_POST['msg'];

// $_FILES  HTTP 文件上传变量
// 通过 HTTP POST 方式上传到当前脚本的项目的数组

// $REQUEST  HTTP Request 变量
// 默认包含 $_GET $_POST $_COOKIE 的数组

// $_SESSION  Session 变量
// 当前脚本可用 SESSION 变量的数组

// $_ENV  环境变量
// 通过环境方式传递给当前脚本的变量的数组
echo 'My user name is ' . $_ENV['USER'];

// $_COOKIE  HTTP Cookies
// 通过 HTTP Cookies 方式传递给当前脚本的变量的数组
echo "hello ".htmlspecialchars($_COOKIE['name']);