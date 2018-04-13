<?php
    require_once ('../models/structure/publication.class.php');
    require_once ('../models/dao/connexiondb.class.php');
    require_once ('../models/dao/publication.dao.php');
//require_once('../models/structure/etudiant.class.php');
//require_once('../models/dao/etudiant.dao.php');

    if (isset($_POST['publication'], $_POST['idUser'])){
        $publication = $_POST['publication'];
        $idUser = 1;

        $pub = new Publication(0,$idUser,$publication,date('d-m-Y'),0,0);
        $pubdao = new PublicationDAO();

        $result = $pubdao -> nouvellePublication($pub);
        if ($result){
            header('Location: ../views/all.php');
        }
    }
    else{
        echo 'Erreur dans les données envoyées!';
    }
?>