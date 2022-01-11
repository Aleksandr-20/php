<?php

// реализовать возможность предоставления информации о наличии товара по названию и количеству
// использовать аякс запрос (get)
$items = [
    [
        'id' => 1,
        'title' => 'Флейта',
        'price' => 20000,
        'count' => 13
    ],
    [
        'id' => 2,
        'title' => 'Гитара',
        'price' => 18000,
        'count' => 28
    ],
    [
        'id' => 3,
        'title' => 'Пианино',
        'price' => 68000,
        'count' => 0
    ],
    [
        'id' => 4,
        'title' => 'Барабаны',
        'price' => 68000,
        'count' => 2
    ],
];

// реализовать возможность подбора по категории, возрасту, наличию прививок
// использовать аякс запрос (post)
$animals = [
    [
        'name' => 'Люся',
        'age' => 1,
        'additional_info' => ['vaccinations' => true, 'passport' => true],
        'category' => 'cat'
    ],
    [
        'name' => 'Том',
        'age' => 3,
        'additional_info' => ['vaccinations' => false, 'passport' => true],
        'category' => 'dog'
    ],
    [
        'name' => 'Макс',
        'age' => 2,
        'additional_info' => ['vaccinations' => false, 'passport' => false],
        'category' => 'cat'
    ],
    [
        'name' => 'Пантелеймон',
        'age' => 1,
        'additional_info' => ['vaccinations' => true, 'passport' => false],
        'category' => 'cat'
    ],
    [
        'name' => 'Граф',
        'age' => 3,
        'additional_info' => ['vaccinations' => true, 'passport' => true],
        'category' => 'dog'
    ],
    [
        'name' => 'Ричард',
        'age' => 1,
        'additional_info' => ['vaccinations' => true, 'passport' => true],
        'category' => 'dog'
    ]
];

