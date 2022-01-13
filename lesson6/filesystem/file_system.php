<?php
const FILE_NAME = 'file.txt';

$data = 'Данные для записи';
// запись в файл
if (file_put_contents(FILE_NAME, $data, LOCK_EX | FILE_APPEND) !== false){
    echo 'Данные были успешно записаны';
} else {
    echo 'Данные не были записаны';
}

const FILE_NAME_2 = 'file2.txt';

$data = 'Данные для записи';
// $data . 'разделитель'
// $data . "\n" / "\r\n", / PHP_EOL

// запись в файл
if (file_put_contents(FILE_NAME_2, $data . PHP_EOL, LOCK_EX | FILE_APPEND) !== false){
    echo 'Данные с переносом строки были успешно записаны';
} else {
    echo 'Данные не были записаны';
}

// чтение из файла в строку
// const FILE_NAME = 'file.txt';
$str_from_file = file_get_contents(FILE_NAME);
var_dump($str_from_file);

// чтение из файла в массив
// const FILE_NAME_2 = 'file2.txt';
$arr_from_file = file(FILE_NAME_2,
    FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
var_dump($arr_from_file);