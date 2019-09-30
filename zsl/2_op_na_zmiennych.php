<?php
$x = 2;
echo $x++,'<br>'; //2
echo ++$x,'<br>'; //4
echo $x,'<br>'; //4
$y=$x++;
echo $y,'<br>'; //4
$y=++$x;
echo $y,'<br>'; //6
echo ++$y,'<br>'; //7

// operatory rzutowania
// bool, int , float, string, array , object, date_sunset



$text1='123abc';
$text1=(int)$text1;
echo $text1, '<br>'; // wyswietla sie 123

$text2 = -1;
$text2 = (bool)$text2;
echo $text2,'<br>';

$text3 = 123;
$text3 = (unset)$text3;
echo $text3;
echo gettype($text3),'<hr>'; //null

$x = 10;
echo is_string($x);
echo is_bool($x);
echo is_float($x);
echo is_int($x);
echo is_null($x),'<hr>';

#############################################################
//@- operator ignorowania bledow

$w;
echo @gettype($w);




//zmienne superglobalne
// ec
echo $_SERVER ['SERVER_PORT'];
echo '<HR>';
echo $_SERVER ['SERVER_NAME'];
echo '<HR>';
echo $_SERVER ['SERVER_PROTOCOL'];





 ?>
