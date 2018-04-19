<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 19/04/2018
 * Time: 21:06 PM
 */
    require_once ('../models/structure/commentaire.class.php');
    require_once ('../models/dao/connexiondb.class.php');
    require_once ('../models/dao/commentaire.dao.php');

    if (isset($_GET['idCom'])){
        $idcommentaire = $_GET['idCom'];

        $idcom = new Commentaire($idcommentaire,0,0,0,0,0);
        $idcomdao = new CommentaireDAO();

        $result = $idcomdao->like($idcom);
        if ($result){
            header('Location: ../views/all.php');
        }
    }
    else{
        echo 'Erreur dans les données envoyées!';
    }
    ?>