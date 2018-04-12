<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 11/04/2018
 * Time: 22:52 PM
 */
    require_once('../models/structure/etudiant.class.php');
    require_once('../models/dao/connexiondb.class.php');
    require_once('../models/dao/etudiant.dao.php');

    if(isset($_POST['matricule'], $_POST['pwd'])) {
        $matricule = $_POST['matricule'];
        $pwd = $_POST['pwd'];

        $etudiant = new Etudiant(0, $matricule, $pwd);
        $etudao = new EtudiantDAO();

        $res = $etudao->seConnecter($etudiant);

        if($res) {
            //Créer une session

            $_SESSION['matricule'] = $matricule;

            header('Location: ../views/accueil.php');
        } else {
            header('Location: ../views/login.php?error=3');
        }

    } else {
        echo 'Erreur dans les données envoyées!';
    }
?>