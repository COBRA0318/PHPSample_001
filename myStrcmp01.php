<?php
//よほどのことが無い限り、strcmpで比較した方が良い
var_dump(0 == "a");      // 0 == 0 -> true
var_dump("1" == "01");   // 1 == 1 -> true
var_dump("10" == "1e1"); // 10 == 10 -> true
var_dump(100 == "1e2");  // 100 == 100 -> true

if("abc" > "xyz") {
    print "BBB";
//数値同士の比較
}elseif ("5671" < "890")    {
    print "CCC".PHP_EOL;
}else{
    print "Nothing".PHP_EOL;
}

//済血の部分を比較
if('5member' < 44) {
    print "44".PHP_EOL;
}else{
    print "5member".PHP_EOL;
}

?>