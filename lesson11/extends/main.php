<?php
require_once 'FileHandler.php';

$file_name = 'settings.txt';

$ext = pathinfo($file_name, PATHINFO_EXTENSION);

$handler = FileHandler::getHandler($ext, $file_name);
$handler->add('token', '5345j5g24hk');
$handler->write(); // полиморфизм наследования



