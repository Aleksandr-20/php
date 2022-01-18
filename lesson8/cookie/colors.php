<?php
// установить setcookie('name', 'value', time() + 3600);
// получить на сервере $_COOKIE
$server = $_SERVER;
if ($server['REQUEST_METHOD'] === 'POST') {
    $post = $_POST;
    $color = $post['colors'];
    setcookie('color', $color, time() + 3600);
    $bg_color = $color;
    header('Location: colors.php');
} else {
    $bg_color = $_COOKIE['color'] ?? 'white';
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body style="background-color: <?= $bg_color?>">

<form action="colors.php" method="post">
    <label for="colors">Изменить цвет фона</label>
    <select id="colors" name="colors">
        <option value="#B3E5FC">Голубой</option>
        <option value="#CE93D8">Сиреневый</option>
        <option value="#F5F5F5">Серый</option>
        <option value="#F8BBD0">Розовый</option>
        <option value="white">Белый</option>
    </select>
    <input type="submit" value="Изменить">
</form>

</body>
</html>
