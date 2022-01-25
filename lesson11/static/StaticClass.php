<?php
// StaticClass.php

class StaticClass {
    const PI = 3.14;

    // ключевое слово static
    public static $count;
    public $name;

    public static function getSumm(int $a, int $b){
        self::staticVoid();
        // из static методов нельзя обращаться
        // к не static свойствам или методам
        return $a + $b * self::PI + self::$count;
    }
}
// обращение к статическим методам и свойствам
// осуществляется без создания экземпляра класса
$count = StaticClass::$count;
StaticClass::getSumm(2, 89);
$val = StaticClass::PI;

// $this->
// :: оператор разрешения области видимости
// (двойное двоеточие)
// parent::
// self::

$obj = new StaticClass();
$obj->name = '1';

// $obj::$count = 56;

$obj2 = new StaticClass();
$obj2->name = '2';

// var_dump($obj2::$count);
