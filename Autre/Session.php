<?php
require_once("../Models/FilmManager.php");
require_once("../Models/ActeurManager.php");
require_once("../Controllers/ControllerConnexion.php");
function lanceSession($login,$pwd){
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['password'] =$pwd;
    $_SESSION['logged'] = true;
    $_SESSION['admin'] = false;

    if($login == "admin"){
        $_SESSION['admin'] = true;
    }
}



