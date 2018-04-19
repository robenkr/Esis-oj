<?php
    require_once ('../models/structure/commentaire.class.php');
    require_once ('../models/dao/connexiondb.class.php');
    require_once ('../models/dao/commentaire.dao.php');

    if (isset($_POST['idpublication'], $_POST['idUser'], $_POST['commentaire'])){
        $idPublication = $_POST['idpublication'];
        $idUser = $_POST['idUser'];
        $commentaire = $_POST['commentaire'];

        $com = new Commentaire(0,$idUser,$idPublication,date('d-m-Y'),0,0);
        $comdao = new CommentaireDAO();

        $result = $comdao -> ajouterCommentaire($com);
        if ($result){
            header('Location: ../views/all.php');
        }
    }
    else{
        echo 'Erreur dans les données envoyées!';
    }
?>