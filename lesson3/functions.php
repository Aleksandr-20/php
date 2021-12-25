<?php
declare(strict_types=1); // режим строгой типизации
// 1. НАПИШИТЕ ФУНКЦИЮ, КОТОРАЯ ПРИНИМАЕТ НА ВХОД 3
// ЧИСЛА И ВОЗВРАЩАЕТ НАИМЕНЬШЕЕ ИЗ НИХ
function getMin(float $a, float $b, float $c) :float
{
    return min($a, $b, $c);
}

var_dump(getMin(3, 67, -100));

// Fatal error: Uncaught TypeError: getMin(): Argument #1 ($a) must be of type float, string given
// var_dump(getMin('3', '67', '-100'));

// var_dump(getMin(98)); Fatal error: Uncaught ArgumentCountError: Too few arguments to function getMin()

// 2. НАПИШИТЕ ФУНКЦИЮ, КОТОРАЯ ПРИНИМАЕТ НА ВХОД 2 АРГУМЕНТА ТИПА int
// И ИЗМЕНЯЕТ ИХ ЗНАЧЕНИЯ, УВЕЛИЧИВАЯ В 2 РАЗА
function changeNums(int &$a, int &$b) {
    $a *= 2;
    $b *= 2;
}
$x = 100;
$y = 400;
changeNums($x, $y);

var_dump($x, $y); // 200, 800
// $a -> [45]  $b <- [45]
$a = 45;
$b = $a;

// $n -> [45] <- $m
$n = 45;
$m = &$n;

$a = 600;
$b = 300;
const MIN = 0;

function some_func(){
    $inner = 100;
    // const MAX = 1000;  PHP Parse error:  syntax error, unexpected token "const"
    define('ERROR', 0);
    global $b;
    var_dump(MIN, $a, $b); // 0, NULL, 300

    function inner_func(){
        var_dump('inner_func');
    }
}
some_func();
inner_func(); // 'inner_func'
var_dump(ERROR, $inner);


// 3. НАПИШИТЕ ФУНКЦИЮ, КОТОРАЯ ПРИНИМАЕТ НА ВХОД ЛОГИН И ПАРОЛЬ
// ЕСЛИ ЛОГИН НЕ РАВЕН 'qwe', А ПАРОЛЬ НЕ РАВЕН '123', ФУНКЦИЯ ВОЗВРАЩАЕТ false,
// В ПРОТИВНОМ СЛУЧАЕ ВОЗВРАЩАЕТ true
// ТИП ВХОДЯЩИХ И ВОЗВРАЩАЕМЫХ ДАННЫХ ОПРЕДЕЛИТЬ САМОСТОЯТЕЛЬНО


// 4. НАПИШИТЕ ФУНКЦИЮ, КОТОРАЯ ПРИНИМАЕТ НА ВХОД МАССИВ И ФУНКЦИЮ,
// ОБРАБАТЫВАЕТ КАЖДЫЙ ЭЛЕМЕНТ МАССИВА ПЕРЕДАННОЙ ФУНКЦИЕЙ,
// ИЗМЕНЯЯ МАССИВ
// для перебора массива использовать foreach
function changeArr(array &$arr, callable $func){
    foreach ($arr as &$elem) {
        $elem = $func($elem);
    }
}
$prices = [124, 600, 800, 300];
changeArr($prices, function ($a) {return $a . 'p';});
var_dump($prices);

$prices = [124, 600, 800, 300];
$sqrt = function ($a) {
    return $a * $a;
};
var_dump($sqrt(45));

changeArr($prices, $sqrt);
var_dump($prices);

function between(float $min, float $max){
    return function (float $value) use ($min, $max){
        return $value >= $min && $value < $max;
    };
}
$between0_100 = between(0, 100);
var_dump($between0_100(50)); // true

function sumNums($a = 0, $b = 0){
    return $a + $b;
}

var_dump(sumNums()); // 0
var_dump(sumNums(56)); // 56
var_dump(sumNums(13, -90)); // -77
//var_dump(sumNums('ffwef', 'gfrewgwg')); // ошибка
//var_dump(sumNums(45, ['gfrewgwg'])); // ошибка


// 6. НАПИШИТЕ ФУНКЦИЮ, КОТОРАЯ ПРИНИМАЕТ НА ВХОД МАССИВ
// И ИМЯ УЧАСТНИКА
// И ВОЗВРАЩАЕТ НОВЫЙ МАССИВ, В КОТОРЫЙ ВОЙДУТ ЗАДАЧИ,
// В КОТОРЫХ ИМЯ УЧАСТНИКА РАВНО ПЕРЕДАННОМУ ИМЕНИ

function get_all_tasks(){
    return [
        [
            'title'=>'Задача 1',
            'date'=>date_create('yesterday'),
            'participants'=>['Артур', 'Полина'],
            'closed'=>false
        ],
        [
            'title'=>'Задача 2',
            'date'=>date_create('tomorrow'),
            'participants'=>[],
            'closed'=>false
        ],
        [
            'title'=>'Задача 3',
            'date'=>date_create(),
            'participants'=>['Артур', 'Глеб'],
            'closed'=>false
        ],
        [
            'title'=>'Задача 4',
            'date'=>date_create('yesterday'),
            'participants'=>['Павел', 'Полина'],
            'closed'=>true
        ]
    ];
}


function get_tasks_by_participant(array $tasks, string $name) :array
{
    $new_arr = [];
    foreach ($tasks as $task) {
        if (in_array($name, $task['participants'])){
            $new_arr[] = $task;
        }
    }
    return $new_arr;
}
$tasks = get_all_tasks();
$filtered = get_tasks_by_participant($tasks, 'Артур');

$filtered = get_tasks_by_participant(get_all_tasks(), 'Артур');



