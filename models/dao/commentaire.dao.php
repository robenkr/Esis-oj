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

    }
    public function getAllCommentaires() {

    }
    public function like($commentaire) {

    }
    public function dislike($commentaire) {

    }
}