<?php

$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated; // lastname,email,phone

// 空の配列を使うと空文字列となります
var_dump(implode('hello', array())); // string(0) ""

?>