<?php
// подключить books-data.php
require_once 'books-data.php';
// вызвать функцию get_books
$books = get_books();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Книги</title>
</head>
<body>
<!-- подключить header.php -->
<?php require_once 'components/header.php'?>

<main>
<!-- вывести информацию о книгах -->
    <?php foreach ($books as $book): ?>
    <div>
        <h2><?= $book['title'] ?></h2>
        <p><?= $book['author'] ?></p>
        <img src="img/<?= $book['img']?>" alt="<?= $book['title'] ?>">
        <p>Стоимость: <?= $book['price'] ?></p>
    </div>
    <?php endforeach;?>
</main>

<!-- подключить footer.php -->
<?php include_once 'components/footer.php' ?>
</body>
</html>