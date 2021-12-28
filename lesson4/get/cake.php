<?php
$get = $_GET; // ['id' => 1]
$id = $get['id']; // '1' или '2' или '45' или 'irgnawria'
if (!isset($id)) {
    header("Location: cakes.php");
} 
function getCake(int $id) {
    $cakes = require_once 'cakes_data.php';
    foreach ($cakes as $cake){
        if ($id === $cake['id']) return $cake;
    }
}
$cake = getCake($id);
if (!isset($cake)) {
    header("Location: cakes.php");
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<section class="cake">
    <div class="info">
        <h2><?= $cake['name'] ?></h2>
        <p><?= $cake['description'] ?></p>
        <p>Стоимость: <?= $cake['price'] . $cake['currency'] ?></p>
        <div class="img">
            <img src="/images/<?= $cake['main_img']?>">
        </div>
        <div>
            <? foreach ($cake['imgs'] as $img): ?>
            <img src="/images/<?= $img?>">
            <? endforeach; ?>
        </div>
        <div class="buy">
            <a href="#">Заказать</a>
        </div>
    </div>
</section>
</body>
</html>
