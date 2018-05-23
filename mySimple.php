<?php
print("Hello World");

print "print() also works without parentheses.";

print "This spans
multiple lines. The newlines will be
output as well";

print "This spans\nmultiple lines. The newlines will be\noutput as well.";

print "escaping characters is done \"Like this\".";

// print文の中で変数を使用することが可能です。
$foo = "foobar";
$bar = "barbaz";

print "foo is $foo"; // foo is foobar

// 配列も使用可能です。
$bar = array("value" => "foo");

print "this is {$bar['value']} !"; // this is foo !

// シングルクオートを使用すると値ではなく変数名が出力されます。
print 'foo is $foo'; // foo is $foo

// 他の文字を使用しない場合、変数だけを出力することが可能です。
print $foo;          // foobar

print <<<END
This uses the "here document" syntax to output
multiple lines with variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;
?>