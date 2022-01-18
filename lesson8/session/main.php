<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>

<nav>
    <a href="main.php">Главная</a>
    <?php if(isset($_SESSION['login'])): ?>
    <a href="account.php">Личный кабинет</a>
    <?php else: ?>
    <a href="form.php">Войти</a>
    <?php endif; ?>
</nav>

<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Ex, minima.
</p>

<!-- форма доступна только авторизованным пользователям -->
<?php if(isset($_SESSION['login'])): ?>
<form>
    <textarea></textarea>
    <input type="submit" value="Добавить комментарий">
</form>
<?php endif; ?>


</body>
</html>