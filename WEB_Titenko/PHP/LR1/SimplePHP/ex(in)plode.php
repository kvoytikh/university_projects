<?php
//explode — Разбивает строку с помощью разделителя
// Пример 1
echo "<br>";
echo "<br>";
$pizza  = "кусок1 кусок2 кусок3 кусок4 кусок5 кусок6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // кусок1
echo "<br>";
echo $pieces[1]; // кусок2

echo "<br>";
echo "<br>";

// Пример 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *

?>

<?php
/*
   Строка, которая не содержит разделителя, будет
   просто возвращать массив с одним значением оригинальной строки.
*/
echo "<br>";
$input1 = "hello";
$input2 = "hello,there";
$input3 = ',';
echo "<br>";
var_dump( explode( ',', $input1 ) );
echo "<br>";
var_dump( explode( ',', $input2 ) );
echo "<br>";
var_dump( explode( ',', $input3 ) );

?>

<?php
//implode — Объединяет элементы массива в строку
echo "<br>";

$array = array('имя', 'почта', 'телефон');
$comma_separated = implode(",", $array);

echo $comma_separated; // имя,почта,телефон

// Пустая строка при использовании пустого массива:
echo "<br>";
var_dump(implode('hello', array())); // string(0) ""

?>
