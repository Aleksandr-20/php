<?php
// 1. ЧТО ПРОИЗОЙДЕТ ПОСЛЕ ВЫЗОВА ФУНКЦИИ extract ???
$page_data = [
    'title' => 'Main',
    'user_name' => 'Max',
    'posts'=>['Lorem ipsum dolor.', 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet, consectetur.']
];


extract($page_data);

// 2. ПОЛУЧИТЬ МАССИВ ПОЧТОВЫХ АДРЕСОВ ПОЛЬЗОВАТЕЛЕЙ
$users = [
   [
       'name' => 'Пётр',
       'mail' => 'peter99@gmail.com'
   ],
    [
        'name' => 'Алексей',
        'mail' => 'alex78@gmail.com'
    ],
    [
        'name' => 'Максим',
        'mail' => 'max92@gmail.com'
    ],
    [
        'name' => 'Мария',
        'mail' => 'masha81@gmail.com'
    ],
];

// 3. КАК РАБОТАЕТ ФУНКЦИЯ list ???

// 4. ОТСОРТИРОВАТЬ МАССИВ ПО price, 'потом' ПО 'title'
$items = [
    [
        'id' => 1,
        'title' => 'Flute',
        'price' => 20000,
    ],
    [
        'id' => 2,
        'title' => 'Guitar',
        'price' => 18000,
    ],
    [
        'id' => 3,
        'title' => 'Piano',
        'price' => 68000,
    ],
    [
        'id' => 4,
        'title' => 'Drum',
        'price' => 68000,
    ],
];


