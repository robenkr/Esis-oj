<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 11/04/2018
 * Time: 22:01 PM
 */

class ConnexionDB
{
    static function getConnexion(){
        try {
            $host = 'mysql:host=localhost;dbname=esis-oj';
            $user = 'root';
            $pwd = '';
            $bdd = new PDO($host, $user, $pwd,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }

        return $bdd;
    }
    }
}