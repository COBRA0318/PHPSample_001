<html>
<head><title>PHP TEST</title></head>
<body>

$apple=赤<br>$melon=緑<br>$banana=黄<br>$apple=赤<br>$melon=緑<br>$banana=黄<br>$tmp_apple=red<br>$tmp_melon=green<br>$tmp_banana=yellow<br></body>
</html>
<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$array_fruit = array('apple'=>'赤','melon'=>'緑','banana'=>'黄');
extract($array_fruit);

print('$apple='.$apple.'<br>');
print('$melon='.$melon.'<br>');
print('$banana='.$banana.'<br>');

$array_fruit2 = array('apple'=>'red','melon'=>'green','banana'=>'yellow');
extract($array_fruit2, EXTR_SKIP);

print('$apple='.$apple.'<br>');
print('$melon='.$melon.'<br>');
print('$banana='.$banana.'<br>');

$array_fruit3 = array('apple'=>'red','melon'=>'green','banana'=>'yellow');
extract($array_fruit3, EXTR_PREFIX_SAME, 'tmp');

print('$tmp_apple='.$tmp_apple.'<br>');
print('$tmp_melon='.$tmp_melon.'<br>');
print('$tmp_banana='.$tmp_banana.'<br>');

?>
</body>
</html>