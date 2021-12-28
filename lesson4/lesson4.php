<?php
    // $_SERVER $_GET $_POST
    $server = $_SERVER;
    var_dump($server);
    if ($server['REQUEST_METHOD'] === 'GET'){
        $get = $_GET;
        var_dump($get);
    } else if ($server['REQUEST_METHOD'] === 'POST'){
        $post = $_POST;
        var_dump($post);
    }
?>

<a href="lesson4.php?count=3&id=56">GET запрос</a>

<form method="post" action="lesson4.php">
    <input type="text" placeholder="логин" name="login">
    <input type="password" placeholder="пароль" name="password">
    <input type="submit" value="Авторизация">
</form>



