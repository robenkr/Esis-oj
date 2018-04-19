<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 11/04/2018
 * Time: 22:04 PM
 */

class CommentaireDAO
{
    private $db;

    public function __construct() {
        $this->db = ConnexionDB::getConnexion();
    }
    public function ajouterCommentaire($commentaire) {
        $str = "INSERT INTO commentaire VALUES(null,:idEtudiant, :idPublication, :contenu,now(), :nblike, :nbdislike)";
        $req = $this->db->prepare($str);
        $res = $req->execute(array(
            'idEtudiant' => $commentaire->getIdEtudiant(),
            'idPublication' => $commentaire->getIdPublication(),
            'contenu' => $commentaire->getContenu(),
            'nblike' => $commentaire->getNblike(),
            'nbdislike' => $commentaire->getNbdislike()
        ));

        if($res) {
            return True;
        } else {
            return False;
        }
    }
    public function getAllCommentaires($commentaire) {
        $pub = [];
        $str = "SELECT * FROM commentaire WHERE idPublication = :idPublication ORDER BY date ASC";
        $req = $this->db->prepare($str);
        $req->execute(array(
            'idPublication' => $commentaire->getIdPublication()
        ));
        while($v = $req->fetch())
            $pub[]= $v;
        return $pub;
    }
    public function like($commentaire) {
        $str = "UPDATE commentaire SET nblike = nblike + 1 WHERE id = :id";
        $req = $this->db->prepare($str);
        $res = $req->execute(array(
            'id'=>$commentaire->getId()
        ));

        if($res) {
            return True;
        } else {
            return False;
        }
    }
    public function dislike($commentaire) {
        $str = "UPDATE commentaire SET nbdislike = nbdislike + 1 WHERE id = :id";
        $req = $this->db->prepare($str);
        $res = $req->execute(array(
            'id'=>$commentaire->getId()
        ));

        if($res) {
            return True;
        } else {
            return False;
        }
    }
}