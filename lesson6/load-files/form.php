<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загрузка файлов на сервер</title>
</head>
<body>

<form action="form-handler.php" method="post" enctype="multipart/form-data">
    <input type="text" name="user_name"> <!-- $_POST -->
    <input type="file" name="picture" accept="image/*"> <!-- $_FILES -->
    <input type="submit" value="Отправить">
</form>

</body>
</html>