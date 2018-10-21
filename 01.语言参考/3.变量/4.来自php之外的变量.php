<?php
echo '$_POST[\'user\']: ' . $_POST['user'] . '<br/>';
echo '$_REQUEST[\'user\']: ' . $_REQUEST['user'] . '<br/>';

//import_request_variables('p', 'p_');
//echo $p_user;

// 自 PHP 5.0.0 起，这些长格式的预定义变量
// 可用 register_long_arrays 指令关闭。

echo $HTTP_POST_VARS['user'];

// 如果 PHP 指令 register_globals = on 时可用。不过自
// PHP 4.2.0 起默认值为 register_globals = off。
// 不提倡使用/依赖此种方法。

echo $user;