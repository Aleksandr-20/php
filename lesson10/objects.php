<?php
// objects.php
require_once 'author.php';
require_once 'article.php';
require_once 'storage.php';

// для создания объекта необходим класс,
// создание объектов new + вызов конструктора
// объект типа Author / экземпляр класса Author
$author_ivan = new Author();

// доступ к свойствам и методам осуществляется через ->
$author_ivan->name = 'Иван';
$author_ivan->age = 21;

var_dump($author_ivan->age, $author_ivan->name);

$author_mark = new Author();
$author_mark->name = 'Марк';
$author_mark->age = 37;

var_dump($author_ivan, $author_mark);

$php = new Article($author_ivan, 'PHP 8');
var_dump($php);

$js = new Article($author_ivan, 'JS');

$storage_1 = new Storage();
// articles ['PHP 8' => $php, 'JS' => $js]
// name Сборник статей

// вызов методов
$storage_1->addArticle($php);
$storage_1->addArticle($js);

$from_storage = $storage_1->getByTitle('JS');
// вывести на экран имя автора полученной статьи
var_dump($from_storage->author->name);

var_dump($storage_1);





$storage_2 = new Storage();
var_dump($storage_2);



