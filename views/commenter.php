<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 05/04/2018
 * Time: 10:04 AM
 */
require_once ('../models/dao/connexiondb.class.php');
require_once ('../models/structure/commentaire.class.php');
require_once ('../models/dao/commentaire.dao.php');



if (!isset($_SESSION['matricule'])){
    header('Location: login.php') ;
}
//    if(isset($_GET['idPub']) && isset($_GET['contenu']) && isset($_GET['date']) && isset($_GET['nblike']) && isset($_GET['nbdislike'])){
        $idPub = isset($_GET['idPub']) ? $_GET['idPub'] : "";
        $contenu = isset($_GET['contenu']) ? $_GET['contenu'] : "";
        $date = isset($_GET['date']) ? $_GET['date'] : "";
        $nbLike = isset($_GET['nblike']) ? $_GET['nblike'] : "";
        $nbDislike = isset($_GET['dislike']) ? $_GET['dislike'] : "";
        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : "";
//    }
    $commentaire = new Commentaire(0,0,$idPub,0,0,0,0);
    $commentairedao = new CommentaireDAO();
    $res = $commentairedao->getAllCommentaires($commentaire);
//var_dump($res);die();

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="static/img/esis.png">
    <title>ESIS-OJ</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="static/css/font-awesome.css">

    <!-- Bootstrap core CSS -->
    <!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Material Design Bootstrap -->
    <link href="static/css/compiled.min1c9b.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
<!--Navbar-->
<?php include_once ('head.php');?>
<!--/.Navbar-->
<!--Header-->
<div class="text-xs-center">
    <h3><i class="fa fa-star"></i> Commentaires</h3>
    <hr>
</div>
<div class="container">
    <div class="col-md-12 jumbotron">
            <div class="media">
                <div class="media-body">
<!--                    <h5 class="media-heading">--><?php //echo $idPub;?><!--</h5>-->
                    <p><?php echo $contenu;?></p>
                    <div class="col-xs-12"></div>
                    <div class="col-xs-4">
                        <span class="right">Post&eacute; le <?php echo $date;?></span>
                    </div>
                    <div class="col-xs-8">
                        <span class="left"><a href="../controllers/add_like.php?idPub=<?php echo $idPub;?>">Like</a>(<?php echo $nbLike;?>)</span>
                        <span class="left"><a href="../controllers/add_dislike.php?idPub=<?php echo $idPub;?>">Dislike</a>(<?php echo $nbDislike;?>)</span>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-md-8 offset-md-2">
        <?php foreach ($res as $com){?>
        <div class="media">
            <div class="media-body">
                <h5 class="media-heading"><?php echo $com['id'];?></h5>
                <p><?php echo $com['contenu'];?></p>
                <div class="col-xs-12"></div>
                <div class="col-xs-4">
                    <span class="right">Post&eacute; le <?php echo $com['date'];?></span>
                </div>
                <div class="col-xs-8">
                    <span class="left"><a href="../controllers/add_like.php?idPub=<?php echo $com['id'];?>">Like</a>(<?php echo $com['nblike'];?>)</span>
                    <span class="left"><a href="../controllers/add_dislike.php?idPub=<?php echo $com['id'];?>">Dislike</a>(<?php echo $com['nbdislike'];?>)</span>
                </div>
            </div>
        </div>
        <hr>
        <?php }?>
    </div>
    <div class="col-md-12">
        <form action="../controllers/add_commentaire.php" method="post">
            <br><br><br>
            <!--Textarea with icon prefix-->
            <div class="md-form">
                <i class="fa fa-pencil prefix"></i>
                <input type="hidden" name="idUser" value="<?php echo $_SESSION['id']?>">
                <input type="hidden" name="idpublication" value="<?php echo $idPub?>">
                <textarea type="text" id="form8" class="md-textarea" name="commentaire"></textarea>
                <label for="form8">Votre Commentaire</label>
            </div>
            <div class="">
                <button class="btn btn-success btn-lg">Commenter</button>
            </div>
        </form>
    </div>
</div>
<br>
<div class="clearfix"></div>
<?php include_once ('foot.php');?>
<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="static/js/jquery-3.1.1.min.js"></script>

<!-- Tooltips -->
<script type="text/javascript" src="static/js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
<!---->
<!-- MDB core JavaScript -->
<script type="text/javascript" src="static/js/compiled.min324d.js"></script>
<script>
    new WOW().init();

    // MDB Lightbox Init
    //        $(function () {
    //            $("#mdb-lightbox-ui").load("assets/mdb-lightbox-ui.html");
    //        });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>
