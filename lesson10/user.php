<?php
// user.php
class User
{
    public $comment;

    // модификатор доступа private означает, что к свойству или методу
    // можно обратиться только внутри класса через псевдопеременную $this
    private $login;
    private $age;

    public function getInfo()
    {
        return "Логин $this->login; возраст $this->age. $this->comment";
    }

    public function setLogin(string $login){
        if (strlen($login) < 5) {
            throw new InvalidArgumentException(
                'Размер не должен быть меньше 5');
        }
        $this->login = $login;
    }

    public function getLogin(){
        return $this->login;
    }


}
$user = new User();
$user->comment = 'Пользователь ...';
$user->setLogin('qwerty2018');
var_dump($user->getLogin());
/* доступ закрыт модификатором доступа private
$user->login = 'qwerty';
var_dump($user->age);
*/


// function get_info() {}
//
// strlen возвращает длину строки (в байтах) 2
// mb_strlen возвращает длину строки
// функции приведения к верхнему и нижнему регистру
