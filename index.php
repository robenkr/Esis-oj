<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 05/04/2018
 * Time: 09:13 AM
 */
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
if (!isset($_SESSION['user']) && ($_SERVER['QUERY_STRING'] != "views/login.php")){
    header('Location: views/login.html') ;
}
//    header ('Location: views/index.php');


