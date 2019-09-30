<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
echo "zsl<br>";
$name = "Janusz";

echo "twoje imie to $name <br>";
// systemy liczbowe
$x= 10;
$hex = 0xA;
$oct = 021;
$bin = 0b111;
echo "$bin<hr>";

// heredoc
$name = "anna";
$nazwisko = "qwer";

$q=<<<etykieta
imię: $name<br>
nazwisko : $nazwisko <hr>


etykieta;

echo $q;
echo $q;



// NOWDOC
ECHO<<<'etykieta'
imię: $name<br>
nazwisko : $nazwisko <hr>
etykieta;

$x=20;
echo "nazwa zmiennej : \$x ma wartość $x";


     ?>
  </body>
</html>
