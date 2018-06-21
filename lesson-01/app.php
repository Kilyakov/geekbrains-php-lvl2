<?php

// Пример простого класса

class Human {
    public $name;
    private $surname;

    function __construct($arg_name, $arg_surname) {
        $this->name = $arg_name;
        $this->surname = $arg_surname;
    }

    function WhoAmI() {
        echo $this->name.' '.$this->surname;
    }
}

$user = new Human('Simple', 'User');
//$user->WhoAmI();

// Пример наследования классов
class First {
    public function showName() {
        echo 'First';
    }
}

class Second extends First {}

class Third extends First {
    // перегрузка родительского метода
    public function showName() {
        echo 'Third';
    }
}

$a = new First();
$b = new Second();
$c = new Third();

$a->showName();
$b->showName();
$c->showName();