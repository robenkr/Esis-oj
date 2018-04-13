<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 13/04/2018
 * Time: 08:04 AM
 */
    require_once ('../models/structure/publication.class.php');
    require_once ('../models/dao/connexiondb.class.php');
    require_once ('../models/dao/publication.dao.php');

    if (isset($_GET['idPub'])){
        $idpublication = $_GET['idPub'];

        $idpub = new Publication($idpublication,0,0,0,0,0);
        $idpubdao = new PublicationDAO();

        $result = $idpubdao->like($idpub);
        if ($result){
            header('Location: ../views/all.php');
        }
    }
    else{
        echo 'Erreur dans les données envoyées!';
    }
?>