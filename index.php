<?php
//Задание 1
echo "Задание 1 </br>";

$a = 10;
$b = 2;

echo "сумма: ", $a + $b, "</br>";
echo "разность: ", $a - $b, "</br>";
echo "произведение: ", $a * $b, "</br>";
echo "частное: ", $a / $b;

echo '<hr />';
//Задание 2
echo "Задание 2 </br>";

$x = 2;
$y = 6;
$z = 9;

echo ($x+1)*4-2*($z-2*$x*$x+$y*$y);

echo '<hr />';

//Задание 3
echo "Задание 3 </br>";

$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;

echo $result;

echo '<hr />';
//Задание 4
echo "Задание 4 </br>";

$text1 = "Привет, ";
$text2 = $text1 . "Мир!";



echo $text2;

echo '<hr />';
//Задание 5
echo "Задание 5 </br>";

$name = "John";

echo "Привет, " . $name;

echo '<hr />';
//Задание 6
echo "Задание 6 </br>";

$num = '12345';
$sum = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];

echo $sum;

echo '<hr />';
//Задание 7
echo "Задание 7 </br>";

$hour7 = 60 * 60;
$day7 = $hour7 * 24;
$month = $day7 * 30;

echo "В часе секунд: " . $hour7,"</br>";
echo "В дне секунд: " . $day7,"</br>";
echo "В месяце секунд: " . $month;

echo '<hr />';

//Задание 8
echo "Задание 8 </br>";

$hour = 23;
$min = 40;
$sec = 34;

echo $hour . ":" . $min . ":" . $sec;

echo '<hr />';
//Задание 9
echo "Задание 9 </br>";

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var += 1;
$var -= 1;
echo $var;

echo '<hr />';
//Задание 10
echo "Задание 10 </br>";

define('Foo', 'Иванов');
$name = 'И.';
$middleName = 'И.';
$age = 5;

echo '<h4>' . 'Меня зовут ' . Foo . ' (' . $name . ' ' . $middleName . ').' . '</br>' .
    'Мне ' . $age . ' лет.' . '</h4>';








