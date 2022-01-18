<?php
session_start(); // 69895kfkfkk

if (!isset($_SESSION['login'])){
    header('Location: form.php');
}

$login = $_SESSION['login'];

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
</head>
<body>
<nav>
    <a href="main.php">Главная</a>
    <a href="logout.php">Выйти</a>
</nav>

<h2>Добро пожаловать, <?= $login ?></h2>
</body>
</html>