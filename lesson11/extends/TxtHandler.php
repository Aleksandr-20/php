<?php
require_once 'FileHandler.php';

class TxtHandler extends FileHandler {

    public function __construct(string $file /* доп аргументы */)
    {
        // parent::имяМетода()
        parent::__construct($file);
        // дополнительные инструкции
    }

    public function write(){
        var_dump('запись в txt файл');

        $open = fopen($this->file, 'a');
        foreach ($this->settings as $key => $value) {
            $data = "$key=$value" . PHP_EOL;
            fwrite($open, $data);
        }
        fclose($open);
    }

    public function read(){
        var_dump('чтение из txt файл');
    }

}
