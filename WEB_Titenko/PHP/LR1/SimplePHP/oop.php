<?php
class SimpleClass {
    // объявление свойства
    public $var = 'значение по умолчанию';

    // объявление метода
    public function displayVar() {
        echo $this->var, PHP_EOL;
    }
}
class ExtendClass extends SimpleClass
{
    // Переопределение метода родителя
    function displayVar() {
        echo "Расширенный класс\n", PHP_EOL;
        parent::displayVar();
    }
}

$extended = new ExtendClass();
$extended->displayVar();

$instance = new SimpleClass();

// Это же можно сделать с помощью переменной:
$className = 'SimpleClass';
$instance = new $className(); // new SimpleClass()
?>


<?php
echo "<br>";
echo "<br>";

class Test {
    static public function getNew() {
        return new static;
    }
}

class Child extends Test {}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);
$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);
$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);
?>

<?php
echo "<br>";
echo "<br>";
class Foo {
    public $bar = 'свойство';

    public function bar() {
        return 'метод';
    }
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;
?>