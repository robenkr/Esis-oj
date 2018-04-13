<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 11/04/2018
 * Time: 22:06 PM
 */

class EtudiantDAO
{
    private $db;
    public function __construct()
    {
        $this->db = ConnexionDB::getConnexion();
    }
    public function seConnecter($etudiant){
        $str = "SELECT * FROM etudiant WHERE matricule = :matricule";
        $req = $this->db->prepare($str);
        $req->execute(array(
            'matricule' => $etudiant->getMatricule()
        ));
        while ($res = $req->fetch()) {
             $user[] = $res;
         }
        $user = $user[0];
        if($user != null && password_verify($etudiant->getPwd(),$user['pwd'])) {
            return $user;
        } else {
            return False;
        }
    }
    public function creerCompte($etudiant) {
        $str = "INSERT INTO etudiant VALUES(null, :matricule, :pwd)";
        $req = $this->db->prepare($str);
        $res = $req->execute(array(
            'matricule' => $etudiant->getMatricule(),
            'pwd' => $etudiant->getPwd()
        ));

        if($res) {
            return True;
        } else {
            return False;
        }
    }
    public function selectId($matricule){
        $str = "SELECT id FROM etudiant WHERE matricule = :matricule";
        $req = $this->db->prepare($str);
        $req->execute(array(
            'matricule' => $etudiant->getMatricule()
        ));
        while ($res = $req->fetch()) {
            $user = $res;
        }
        if($user != null) {
            return True;
        } else {
            return False;
        }
    }
}