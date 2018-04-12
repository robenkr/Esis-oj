<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 11/04/2018
 * Time: 23:03 PM
 */
    session_start();
    session_destroy();
    header('Location: index.php');
?>