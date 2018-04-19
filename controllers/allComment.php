<?php
require_once ('../models/dao/connexiondb.class.php');
require_once ('../models/structure/commentaire.class.php');
require_once ('../models/dao/commentaire.dao.php');

    $commentaire = new Commentaire();
$commentairedao = new CommentaireDAO();

$res = $commentairedao->getAllCommentaires();