<?php
session_start();
    if (!isset($_SESSION['matricule'])){
        header('Location: login.php') ;
    }
//    header('Location: login.php');
?>