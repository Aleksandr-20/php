<?php

$animals = require_once 'data/animals-data.php';
$user = require_once 'data/user-data.php';

$response = [
    'animals' => $animals,
    'user_role' => $user['role']
];

echo json_encode($response);

