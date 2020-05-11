<?php

echo "<br>";
echo "<br>";
var_dump(0 == "a"); // 0 == 0 -> true
echo "<br>";
var_dump("1" == "01"); // 1 == 1 -> true
echo "<br>";
var_dump("10" == "1e1"); // 10 == 10 -> true
echo "<br>";
var_dump(100 == "1e2"); // 100 == 100 -> true
echo "<br>";
switch ("a") {
    case 0:
        echo "0";
        break;
    case "a": // Эта ветка никогда не будет достигнута, так как "a" уже сопоставленно с 0
        echo "a";
        break;
}
?>

<?php
echo "<br>";
echo "<br>";
// Целые
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1
echo "<br>";
// С плавающей точкой
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1
echo "<br>";
// Строки
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
echo "<br>";
echo "a" <=> "aa"; // -1
echo "zz" <=> "aa"; // 1
echo "<br>";
// Массивы
echo [] <=> []; // 0
echo [1, 2, 3] <=> [1, 2, 3]; // 0
echo "<br>";
// Объекты
$a = (object) ["a" => "b"];
$b = (object) ["a" => "b"];
echo $a <=> $b; // 0
echo "<br>";
$a = (object) ["a" => "b"];
$b = (object) ["a" => "c"];
echo $a <=> $b; // -1
echo "<br>";
$a = (object) ["a" => "c"];
$b = (object) ["a" => "b"];
echo $a <=> $b; // 1
echo "<br>";
// сравниваются не только значения; ключи должны соответствовать
$a = (object) ["a" => "b"];
$b = (object) ["b" => "b"];
echo $a <=> $b; // 1

?>

<?php
echo "<br>";
// Логические значения и null всегда сравниваются как логические
var_dump(1 == TRUE);  // TRUE - то же, что и (bool)1 == TRUE
var_dump(0 == FALSE); // TRUE - то же, что и (bool)0 == FALSE
var_dump(100 < TRUE); // FALSE - то же, что и (bool)100 < TRUE
var_dump(-10 < FALSE);// FALSE - то же, что и (bool)-10 < FALSE
var_dump(min(-100, -10, NULL, 10, 100)); // NULL - (bool)NULL < (bool)-100 это FALSE < TRUE
?>

<?php
// Так сравниваются массивы при сравнении стандартными операторами
function standard_array_compare($op1, $op2) {
    if (count($op1) < count($op2)) {
        return -1; // $op1 < $op2
    } elseif (count($op1) > count($op2)) {
        return 1; // $op1 > $op2
    }
    foreach ($op1 as $key => $val) {
        if (!array_key_exists($key, $op2)) {
            return null; // не могут быть сравнимы
        } elseif ($val < $op2[$key]) {
            return -1;
        } elseif ($val > $op2[$key]) {
            return 1;
        }
    }
    return 0; // $op1 == $op2
}
?>
