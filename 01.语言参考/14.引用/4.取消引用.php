<?php
// 用 unset() 可取消一个引用, 变量内容仍在
$a = 12;
$b =& $a;
unset($a);
echo $b;