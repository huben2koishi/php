<?php
$rows = "select message
from messages 
where id = 1";

$tabbed = str_replace(' ', '\t', $rows);
$spaced = str_replace('\t', ' ', $rows);


function tab_expand($text) {
    while (strstr($text, '\t')) {
        $text = preg_replace_callback('/([^\t\n]*)(\t+)/m',
            'tab_expand_helper', $text);
    }
    return $text;
}

function tab_expand_helper($matches) {
    $tab = 8;
    return $matches[1] . str_repeat(' ', strlen($matches[2]) *
            $tab - (strlen($matches[1]) % $tab));
}

$spaced = tab_expand($rows);

echo "<pre>$spaced</pre>";