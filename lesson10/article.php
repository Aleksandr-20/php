<?php
// article.php

class Article {
    public $author;
    public $title;
    public $text;
    public $created;

    public function __construct(Author $author, string $title){
        // псевдопеременная this - ссылка на текущий объект,
        // используется для доступа к свойствам и методам внутри класса
        $this->title = $title;
        $this->author = $author;

        $this->created = new DateTime();
    }
}