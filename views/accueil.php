<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 05/04/2018
 * Time: 10:04 AM
 */
    include_once('../controllers/recup_today.php');
    if (!isset($_SESSION['matricule'])){
        header('Location: login.php') ;

    }
//    var_dump($res);die();
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
<div class="container-fluid">
    <form action="new.php">
        <br><br><br>
        <div class="col-md-10 offset-md-1">
            <?php if (empty($res)){?>
                <p>Aucune Publication</p>
                <button class="btn btn-success btn-lg">Publier</button>
            <?php } else{foreach ($res as $pub){?>
                <div class="media">
                    <div class="media-body">
                        <p><?php echo $pub['contenu'];?>
<!--                            <a href="#">Lire la suite</a></p>-->
                        <div class="col-xs-12"></div>
                        <div class="col-xs-4">
                            <span class="right">Post&eacute; le <?php echo $pub['date'];?></span>
                        </div>
                        <div class="col-xs-8">
                            <span class="left"><a href="../controllers/add_like.php?idPub=<?php echo $pub['id'];?>">Like</a>(<?php echo $pub['nblike'];?>)</span>
                            <span class="left"><a href="../controllers/add_dislike.php?idPub=<?php echo $pub['id'];?>">Dislike</a>(<?php echo $pub['nbdislike'];?>)</span>
                        </div>
                    </div>
                </div>
                <hr>
            <?php }}?>

        </div>
    </form>
</div>
<?php include_once('foot.php');?>
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
