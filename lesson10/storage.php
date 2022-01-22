<?php
// storage.php

class Storage {
    public $name = 'Сборник статей';
    public $articles = [];
    // public $created = new DateTime();

    // методы
    // название_статьи => статья (объект)
    public function addArticle(Article $article){
        $this->articles[$article->title] = $article;
    }

    // написать метод получения статьи по названию
    public function getByTitle(string $title){
        return $this->articles[$title];
    }

    public function getByAuthorName(string $name){
        $result = [];
        foreach ($this->articles as $article){
            if ($article->author->name == $name){
                $result[] = $article;
            }
        }
        return $result;
    }
}