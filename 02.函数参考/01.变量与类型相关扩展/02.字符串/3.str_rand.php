<?php
function str_rand($length = 32, $character = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
    if (!is_int($length) || $length < 0) {
        return false;
    }

    $character_length = strlen($character) - 1;

    $string = '';

    for ($i = $length; $i>0; $i--){
        $string .= $character[mt_rand(0, $character_length)];
    }

    return $string;
}

echo str_rand(6).'<br/>';
echo str_rand().'<br/>';
echo str_rand(16, '!@#$%^&*()').'<br/>';
echo str_rand(36, '.-').'<br/>';