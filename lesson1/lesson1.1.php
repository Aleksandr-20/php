<?php
$login = 'qwerty';
isset($login);
unset($login);

const ERROR = 1;
define('MIN_VALUE', 100);

var_dump(ERROR, MIN_VALUE);

$password = '123';
echo 'Пароль: $password'; // Пароль: $password
echo "Пароль: $password \n"; // Пароль: 123

$a = 2 ** 3;

$name = 'Иван';
$surname = 'Григорьев';

$full_name = $name . ' ' . $surname; // Иван Григорьев

$num = 1;
$num += 12;// 13
$num -= 3; // 10
$num /= 1; // 10


$a = 5;
$b = --$a + $a++ - $a++; // 4 + 4 - 5
echo !$a; // false

$a = 55;
$b = 45;
var_dump($a === 55 xor $b === 45); // false
var_dump($a < 0 xor $b === 45); // true
var_dump($a < 0 xor $b !== 45); // false

$result = $a === 55 ? 'а равно 55' : 'a не равно 55';
$name = 'Глеб';

$name = isset($name) ? $name : 'Гость';
$name = $name ?? 'Гость';

$login = 'qwerty';
$password = '123';
// если $login равен qwe и пароль равен 123
// вывести 'Пользователь авторизован'
// в противном случае вывести: 'Ошибка авторизации'
// echo
if ($login === 'qwe' && $password === '123') {
    echo '<h2>Пользователь авторизован</h2>';
} else {
    echo '<h2>Ошибка авторизации</h2>';
}
?>

<?php if ($login === 'qwe' && $password === '123'): ?>
<h2>Пользователь авторизован</h2>
<?php else: ?>
<h2>Ошибка авторизации</h2>
<?php endif; ?>










