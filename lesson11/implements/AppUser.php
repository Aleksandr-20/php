<?php
// AppUser.php
require_once 'ToFileInterface.php';
require_once 'UserInterface.php';
// класс AppUser реализует (имплементирует)
// интерфейс ToFileInterface и интерфейс UserInterface

class AppUser implements ToFileInterface, UserInterface {
    private $login;
    private $password;
    private $name;
    private $age;

    public function writeToFile()
    {

    }

    public function getRole(): string
    {
        return 'ROLE_USER';
    }

    public function getIdentifier(): string
    {
        return $this->login;
    }

    public function getPassword():string{
        return $this->password;
    }
}

