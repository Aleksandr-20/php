<?php
session_start();

// unset($_SESSION['login']);
$_SESSION = [];

// session_destroy();
header('Location: main.php');