<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: choose_yacht.php');
}
$post = $_POST;
var_dump($post);
// ['значения атрибутов name' => 'значения атрибутов value']
var_dump($post['user'], $post['contacts'],
    $post['agree'], $post['price']);


