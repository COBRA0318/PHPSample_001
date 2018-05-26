<?php
$now = time();

// 現在日時を YYYY/MM/DD hh:mm:ss の書式の文字列で取得する
$now = date('Y/m/d H:i:s');

print $now;

// 現在日時を DateTime クラスのインスタンスで取得する
$now = new DateTime();

$now = date_format($now,'Y/m/d H:i:s');

print $now;