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
        $str = "INSERT INTO publication VALUES(null,:idEtudiant,:contenu,now(), :nblike, :nbdislike)";
        $req = $this->db->prepare($str);
        $res = $req->execute(array(
            'idEtudiant' => $publication->getIdEtudiant(),
            'contenu' => $publication->getContenu(),
            'nblike' => $publication->getNblike(),
            'nbdislike' => $publication->getNbdislike()
        ));

        if($res) {
            return True;
        } else {
            return False;
        }
    }
    public function today($date) {
        $pub = [];
        $str = "SELECT * FROM publication WHERE date LIKE ? ORDER BY date DESC";
        $req = $this->db->prepare($str);
        $req->execute([$date.'%']);
        while($v = $req->fetch())
            $pub[]= $v;
        $pub = $pub[0];
        return $pub;
    }
    public function top10() {
        $pub = [];
        $str = "SELECT * FROM publication ORDER BY nblike DESC LIMIT 10";
        $req = $this->db->prepare($str);
        $req->execute();
        while($v = $req->fetch())
            $pub[]= $v;
        return $pub;
    }
    public function getAllPublication() {
        $pub = [];
        $str = "SELECT * FROM publication ORDER BY id DESC";
        $req = $this->db->prepare($str);
        $req->execute();
        while($v = $req->fetch())
            $pub[]= $v;
        return $pub;
    }
    public function like($publication) {
        $str = "UPDATE publication SET nblike = nblike + 1 WHERE id = :id";
        $req = $this->db->prepare($str);
        $res = $req->execute(array(
            'id'=>$publication->getId()
        ));

        if($res) {
            return True;
        } else {
            return False;
        }
    }
    public function dislike($publication) {
        $str = "UPDATE publication SET nbdislike = nbdislike + 1 WHERE id = :id";
        $req = $this->db->prepare($str);
        $res = $req->execute(array(
            'id'=>$publication->getId()
        ));

        if($res) {
            return True;
        } else {
            return False;
        }
    }
}