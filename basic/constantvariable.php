<!-- Constants are like variables except that once they are defined they cannot be changed or undefined -->
<?php

$x = 10;
$x = 20;
$x = (string)$x;
var_dump($x);
// $x = "Moeez";
define("y",10);
define("num",20);

echo y .'<br>';
echo num;
echo "File  number is" . __FILE__;
echo "line  number is" . __LINE__;




// define("name",value,true/false check case_insensitive)
// define("user","Ali");

// echo user;
// $x = 10;
// $x = 25;
// define("user","zohair");
// define("user2","musaib");

// echo "this is demo: " . __FILE__;
// echo user2;


//magic Constant 
// pg- 68
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
//__CLASS__
// __TRAIT__
?>