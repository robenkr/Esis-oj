<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 11/04/2018
 * Time: 22:21 PM
 */

class PublicationDAO
{
    private $db;

    public function __construct() {
        $this->db = ConnexionDB::getConnexion();
    }
    public function getPublication($publication) {

    }
    public function nouvellePublication($publication) {

    }
    public function top10() {

    }
    public function getAllPublication() {
        $pub = [];
        $str = "SELECT * FROM publication";
        $req = $this->db->prepare($str);
        $req->execute();
        while($v = $req->fetch())
            $pub[]= $v;
        return $pub;
    }
    public function like($publication) {

    }
    public function dislike($publication) {

    }
}