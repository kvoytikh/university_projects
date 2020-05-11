<?php
class BaseClass {
    function __construct() {
        print "Конструктор класса BaseClass\n";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "Конструктор класса SubClass\n";
    }
}

class OtherSubClass extends BaseClass {
    // наследует конструктор BaseClass
}

// Конструктор класса BaseClass
$obj = new BaseClass();

// Конструктор класса BaseClass
// Конструктор класса SubClass
$obj = new SubClass();

// Конструктор класса BaseClass
$obj = new OtherSubClass();
?>
<?php
class MyDestructableClass
{
    function __construct() {
        print "Конструктор\n";
    }

    function __destruct() {
        print "Уничтожается " . __CLASS__  . "\n";
    }
}

$obj = new MyDestructableClass();
?>