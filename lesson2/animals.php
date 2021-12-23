<?php

$animals = require_once 'data/animals-data.php';

$user = require_once 'data/user-data.php';

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Животные</title>
</head>
<body>

<section>
    <h2>Все животные</h2>

    <?php foreach ($animals as $animal): ?>
    <div>
        <h3> <?= $animal['name']?> </h3>
        <img height="300" src="/images/<?= $animal['images'] ?>">

        <?php if ($user['role'] === 'admin'): ?>
        <div>
            <button>Редактировать</button>
        </div>
        <?php endif; ?>
    </div>
    <?php endforeach; ?>

</section>

</body>
</html>










