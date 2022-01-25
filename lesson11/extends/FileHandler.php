<?php
// FileHandler.php

// final
abstract class FileHandler {
    /* модификатор доступа
        readonly (php 8.1)
        тип_данных (php 7.4)
        имя свойства */
    /* readonly - запрещает изменение, применяется только
       к типизированным свойствам */
    /* вопросительный знак (?) перед типом данных
       означает, что свойству можно присвоить null */

    // protected свойство или метод доступны внутри класса
    // и внутри дочерних классов
    protected string $file;
    protected array $settings = [];

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function add(string $key, string $value)
    {
        $this->settings[$key] = $value;
    }

    public function getByKey(string $key){
        return $this->settings[$key];
    }

    public function getAll(){
        return $this->settings;
    }

    // abstract - метод без реализации
    // дочерние (не abstract) классы обязаны реализовать
    // abstract методы
    abstract public function write();
    abstract public function read();

    public static function getHandler(string $ext, $file_name){
        if ($ext === 'txt'){
            require_once 'TxtHandler.php';
            return new TxtHandler($file_name);
        }
        if ($ext === 'json') {
            require_once 'JsonHandler.php';
            return new JsonHandler($file_name);
        }
    }
}