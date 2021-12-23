<?php
$prices = [];
$nums = [500, -604, 700, 1000, -200, 40];

foreach ($nums as $num) {
    if ($num > 0) $prices[] = $num;
}

foreach ($nums as &$num) {
    $num += 10;
}
unset($num);
var_dump($nums);
$num = 9000;
var_dump($nums);

$nums = [500, -604, 700, 1000, -200, 40];

$len = count($nums); // 6
for($i = 0; $i < $len; $i++){
    $nums[$i] -= 30;
}

$tours = [
    [
        'id' => 1,
        'city' => 'Лондон',
        'country' => 'Великобритания',
        'price' => 3600
    ],
    [
        'id' => 2,
        'city' => 'Осло',
        'country' => 'Норвегия',
        'price' => 2800
    ],
    [
        'id' => 3,
        'city' => 'Канберра',
        'country' => 'Австралия',
        'price' => 3900
    ],
    [
        'id' => 4,
        'city' => 'Сидней',
        'country' => 'Австралия',
        'price' => 4100
    ],
];
// foreach
// увеличить стоимость каждого тура на 50
// стоимость австралийских туров увеличить на 100
foreach ($tours as &$tour) {
    if ($tour['country'] === 'Австралия') {
        $tour['price'] += 100;
    } else {
        $tour['price'] += 50;
    }
}
unset($tour);
var_dump($tours);

$colors = [
    'white'=>'#ffffff',
    'black'=>'#000000',
    'pink'=>'#ffc0cb'
];

foreach ($colors as $key => $color) {
    var_dump("$key: $color");
}

