<?php
session_start();
regenerate_id();


function regenerate_id(){
    if (isset($_SESSION['time']) && $_SESSION['time'] + 600 <= time()){
        if (session_regenerate_id()) $_SESSION['time'] = time();
    }
}

