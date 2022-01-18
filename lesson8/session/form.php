<?php
session_start();

if (isset($_SESSION['login'])) {
    header('Location: account.php');
}


$server = $_SERVER;
if ($server['REQUEST_METHOD'] === 'POST') {
    $post = $_POST;
    if ($post['login'] === 'qwe' && $post['password'] === '123'){
        $_SESSION['login'] = $post['login'];
        header('Location: account.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>

<?php if(isset($error)): ?>
<p><?= $error ?></p>
<?php endif; ?>

<form action="form.php" method="post">
    <input type="text" placeholder="логин" name="login">
    <input type="password" placeholder="пароль" name="password">
    <input type="submit" value="Войти">
</form>

</body>
</html>