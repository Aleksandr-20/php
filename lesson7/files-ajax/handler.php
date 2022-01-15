<?php
$files = $_FILES;

if ($files['picture']['error'] === 0) {
    // перемещение файла из временной директории (lesson6)
    echo 'Файл ' . $files['picture']['name'] . ' получен';
} else {
    echo 'Попробуйте загрузить другой файл';
}