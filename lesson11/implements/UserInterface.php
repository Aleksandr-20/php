<?php
// UserInterface.php

interface UserInterface /* extends SomeInterface */ {
    public function getRole():string;
    public function getIdentifier():string;
    public function getPassword():string;
}