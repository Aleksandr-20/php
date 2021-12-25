<?php
// 1. ЧТО ПРОИЗОЙДЕТ ПОСЛЕ ВЫЗОВА ФУНКЦИИ extract ???
$title = 'Contacts';
$page_data = [
    'title' => 'Main',
    'user_name' => 'Max',
    'posts'=> ['Lorem ipsum dolor.', 'Lorem ipsum dolor sit amet.',
        'Lorem ipsum dolor sit amet, consectetur.']
];

extract($page_data);
var_dump($title, $user_name, $posts);

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
$mails = array_column($users, 'mail');

// 3. КАК РАБОТАЕТ ФУНКЦИЯ list ???
$user = ['Павел', 'Иванов'];
list($name, $surname) = $user;




