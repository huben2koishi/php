<?php
// require 同 include 未找到文件会发出一条错误

require "include/vars.php";

echo $color;

// require_once 同 require, 但会检查是否已经包含，如果是则不会再次包含