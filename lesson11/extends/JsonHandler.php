<?php
require_once 'FileHandler.php';

class JsonHandler extends FileHandler {

    public function write(){
        var_dump('запись в json файл');
    }

    public function read(){
        var_dump('чтение из json файл');
    }
}