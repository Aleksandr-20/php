<?php
$post = $_POST;
var_dump($post['user_name']);

$files = $_FILES;
var_dump($files);

$tmp_name = $files['picture']['tmp_name'];
$file_name = $files['picture']['name'];
$file_name = microtime() . $file_name;

$ext = pathinfo($file_name, PATHINFO_EXTENSION);

// $file_name = md5(microtime() . $file_name) . ".$ext";
// проверки на тип, размер, код ошибки

// move_uploaded_file(from, to)
if (move_uploaded_file($tmp_name, "images/$file_name")){
    echo 'Файл успешно загружен';
} else {
    echo 'Файл не был загружен';
}
