<?php
    echo "Привет, я - скрипт PHP!<br>";

    /*  1.  <?php echo("если вы хотите работать с документами XHTML или XML, делайте так\n"); ?>

        2.  <? echo ("это простейшая инструкция обработки SGML\n"); ?>
        <?= выражение ?> Это синоним для "<? echo выражение ?>"

        3.  <script language="php">
        echo ("некоторые редакторы (например, FrontPage) не
           любят инструкции обработки");
    */
    //   </script>


?>

<?php
$var = 'Боб';
$Var = 'Джо';
echo "$var, $Var <br>";      // выведет "Боб, Джо"

//$4site = 'еще нет';     // неверно; начинается с цифры
$_4site = 'еще нет';    // верно; начинается с символа подчеркивания
$täyte = 'mansikka';    // верно; 'ä' это (Расширенный) ASCII 228.
?>

<?php
$foo = 'Боб';              // Присваивает $foo значение 'Боб'
$bar = &$foo;              // Ссылка на $foo через $bar.
$bar = "Меня зовут $bar <br>";  // Изменение $bar...
echo $bar;
echo $foo;                 // меняет и $foo.

//Важно отметить, что по ссылке могут быть присвоены только именованные переменные.
?>

<?php
// Неустановленная И не имеющая ссылок (то есть без контекста использования) переменная; выведет NULL
var_dump($unset_var);
echo "<br>";

// Булевое применение; выведет 'false' (Подробнее по этому синтаксису смотрите раздел о тернарном операторе)
echo($unset_bool ? "true <br>" : "false <br>");

// Строковое использование; выведет 'string(3) "abc"'
$unset_str .= 'abc';
var_dump($unset_str);
echo "<br>";

// Целочисленное использование; выведет 'int(25)'
$unset_int += 25; // 0 + 25 => 25
var_dump($unset_int);
echo "<br>";

// Использование в качестве числа с плавающей точкой (float/double); выведет 'float(1.25)'
$unset_float += 1.25;
var_dump($unset_float);
echo "<br>";

// Использование в качестве массива; выведет array(1) {  [3]=>  string(3) "def" }
$unset_arr[3] = "def"; // array() + array(3 => "def") => array(3 => "def")
var_dump($unset_arr);
echo "<br>";

// Использование в качестве объекта; создает новый объект stdClass (см. http://www.php.net/manual/ru/reserved.classes.php)
// Выведет: object(stdClass)#1 (1) {  ["foo"]=>  string(3) "bar" }
$unset_obj->foo = 'bar';
var_dump($unset_obj);
echo "<br>";
?>

<?php
$a = 1;
$b = 2;

function Sum() {
    global $a, $b; //обл видимости

    $b = $a + $b;
}

Sum();
echo $b;
echo "<br>";
?>

<?php
$a = 1;
$b = 2;

function Suma() {
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];  //ассоциативный массив (ключ - имя, значение - содержимое
                                                    //глобальной переменной
}

Suma();
echo $b;
echo "<br>";
?>

<?php
function test() {
    $a = 0;
    echo $a;
    $a++;
}
test();
test();

function test1() {
    static $a = 0;
    echo $a;
    $a++;
}
echo "<br>";
test1();
test1();
test1();
?>


<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
<form action="" method="post">
    Имя:  <input type="text" name="personal[name]" /><br />
    Email: <input type="text" name="personal[email]" /><br />
    Пиво: <br />
    <select multiple name="beer[]">
        <option value="warthog">Warthog</option>
        <option value="guinness">Guinness</option>
        <option value="stuttgarter">Stuttgarter Schwabenbräu</option>
    </select><br />
    <input type="submit" value="Отправь меня!" />
</form>


<?php
echo "<br>";
echo 'это простая строка';
echo "<br>";

echo 'Также вы можете вставлять в строки
символ новой строки вот так,
это нормально';
echo "<br>";
//ДЛЯ СПЕЦСИМВОЛОВ - ДВОЙНЫЕ КАВЫЧКИ
// Выводит: Однажды Арнольд сказал: "I'll be back"
echo 'Однажды Арнольд сказал: "I\'ll be back"';
echo "<br>";

// Выводит: Вы удалили C:\*.*?
echo 'Вы удалили C:\\*.*?';
echo "<br>";

// Выводит: Вы удалили C:\*.*?
echo 'Вы удалили C:\*.*?';
echo "<br>";

// Выводит: Это не будет развернуто: \n новая строка
echo 'Это не будет развернуто: \n новая строка';
echo "<br>";

// Выводит: Переменные $expand также $either не разворачиваются
echo 'Переменные $expand также $either не разворачиваются';
echo "<br>";

include 'string.php';
?>
<?php
include 'concatenation.php';
include 'foreach.php';
include 'hesh-array.php';
include 'ex(in)plode.php';
include 'comparison.php';
include 'oop.php';
include 'oop_const_of_class.php';
include 'oop_construct.php';
include 'oop_singletorn.php';
?>
